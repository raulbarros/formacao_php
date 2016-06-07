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

$produto = new Produto($nome, $preco, $descricao, $pdo, $tabela);

$produto->imprime("bike");
