<?php

chdir(dirname(dirname(__DIR__)));

use ExercicioComposer\Produto\Produto;

require_once "vendor/autoload.php";



$host = "localhost";
$user = "root";
$pass = 'root';
$dbname = "formacao_php";
$tabela = "produtos";
	
try{
	$pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);		
}catch(PDOException $e){
	echo $e->getMessage();
}	

if (isset($_POST['nome']) && isset($_POST['preco']) && isset($_POST['descricao']) ){
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];

	$produto = new Produto($nome, $preco, $descricao, $pdo, $tabela);

	$produto->insereProduto();

}else
	echo "Favor Preecher os campos nome";

// $produto = new Produto("Produto1", 10.0, "Produto em fase de testes", $pdo);

// $produto->imprime("produtos");