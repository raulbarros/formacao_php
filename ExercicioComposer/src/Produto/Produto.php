<?php

namespace ExercicioComposer\Produto;


class Produto{

	protected $nome;
	protected $preco;
	protected $descricao;
	protected $pdo;
	protected $tabela;

	public function __construct($nome, $preco, $descricao, \PDO $pdo, $tabela){
		$this->nome = (string)$nome;
		$this->preco = (float)$preco;
		$this->descricao = (string)$descricao;
		$this->pdo = $pdo;
		$this->tabela = $tabela;
	}

	public function insereProduto(){
		$inserirProduto = 
			$this->pdo->prepare("INSERT INTO $this->tabela (nome, preco, descricao) values (:nome, :preco, :descricao)");
		$inserirProduto->bindValue(":nome", $this->nome, \PDO::PARAM_STR);
		$inserirProduto->bindValue(":preco", $this->preco, \PDO::PARAM_STR);
		$inserirProduto->bindValue(":descricao", $this->descricao, \PDO::PARAM_STR);

		//verifica se o produto ja esta cadastrado
		echo $this->buscaProduto($this->nome);
		if ( $this->buscaProduto($this->nome) ){
			if($inserirProduto->execute()){
				print "Produto inserido com sucesso.";
			}else{
				print "Erro na inserção do produto na base de dados.";
			}
		}else{
			print "O produto já consta em nossa base de dados.";
		}
	}

	public function buscaProduto($nome){
		if ($nome != ""){
			$validar = $this->pdo->prepare("SELECT * FROM $this->tabela where nome = :nome;");
			$validar->bindValue(":nome", $nome);
			$validar->execute();
			// se rowCount for vazio e pq o produto ainda nao foi cadastrado
			// então retorna true	
			return (($validar->rowCount() == 0) ? true : false);

		}  
		else {
			return "Favor informar o nome do produto.";
		}
	}

	public function imprime($nome = ""){
		if (empty($nome)){
			$buscaProduto = $this->pdo->prepare("SELECT * from $this->tabela order by nome desc");
		}else{
			$buscaProduto = $this->pdo->prepare("SELECT * from $this->tabela where nome = :nome order by nome desc");
			$buscaProduto->bindValue(':nome', $nome);
		}
		$buscaProduto->execute();
		$produtos = $buscaProduto->fetchall(\PDO::FETCH_OBJ);

		if ($buscaProduto->rowCount() == 0){
			print 'Nenhum produto cadastrado em nossa base.';
		}
		else {
			foreach ($produtos as $produto) {
				print "Nome: $produto->nome   | ".
					  "Preço: $produto->preco |" .
					  "Descrição: $produto->descricao | <br/>" ;
			}
			print '<pre/>';
		}
	}
}
