<?php

include_once("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$profissao = $_POST["profissao"];

$sql = "insert into usuarios (nome,email,profissao) values ('$nome', '$email', '$profissao')";
$salvar = mysqli_query($mysqli, $sql);

$linhas = mysqli_affected_rows($mysqli);

mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
	<div class="container">
	<nav>
		<ul class="menu">
			<a href="index.php"><li> Cadastro</li></a>
			<a href="consulta.php"><li>Consulta</li></a>
			
		</ul>
	</nav>
	<section>
		<h1>
			Confirmação de Cadastro
		</h1> <br><br>
		<?php
		if($linhas == 1){
			print "Cadastro efetuado com sucesso";
		}else{
			print "Cadastro NÂO efeutado.<br> Já existe um usuário com este email";
		}
	     ?>
		
	
	</section>
	</div>

</body>
</html>



