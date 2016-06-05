<?php
chdir(dirname(__DIR__));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Cadastro do Produto</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	
  	<style type="text/css" media="screen">
  	section h2 span{
  	 	color: #000000;
  	 	background-color: rgba(0,0,0,.2);
  	 	box-shadow: 1px 1px 1px rgba(0,0,0,.5);
  	 	padding: 5px;
  	 	text-align: center;
  	 	margin-left: 230px;
  	 	/*margin-right: 0 auto; */
  	 }	
  	 section h2 {
  	 	/*margin-top: auto;
  	 	margin-right: auto;
  	 	margin-bottom: auto;
  	 	margin-left: auto;*/
  	 	padding: 10px;
  	 }

  	 section form{
  	 	margin-top: auto;
  	 	margin-right: auto;
  	 	margin-bottom: auto;
  	 	margin-left: auto;
  	 	padding: 10px;	
  	 	box-shadow: 2px 2px 2px rgba(0,0,0,.5);
  	 }
  	</style>
</head>
	<body>
	<section>
		<h2>
			<span>Cadastro do Produto</span>
		</h2>
		<form class="form-horizontal" action="src/Controller/ProcessaForm.php" method="post" role="form">
			<div class="form-group">
		    	<label class="control-label col-sm-2" for="nome">Nome:</label>
		    	<div class="col-sm-10">
		    	  	<input type="email" class="form-control" id="nome" placeholder="Insira o nome do produto">
		   		</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="control-label col-sm-2" for="preco">Preço:</label>
		    	<div class="col-sm-10">
		      		<input type="text" class="form-control" id="preco" placeholder="Insira o nome do preço">
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="control-label col-sm-2" for="preco">Descrição:</label>
		    	<div class="col-sm-10">
			      	<textarea name="" type="text" class="form-control" id="pwd" placeholder="Insira a descrição do Produto."> </textarea>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-10">
		      		<button type="submit" class="btn btn-default">Submit</button>
		    	</div>
		  	</div>
		</form>
	</section>
</body>
</html>
 