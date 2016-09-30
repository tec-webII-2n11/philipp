<!doctype html>
<html lang="pt-br">
<head> 
	<title>Cadastro</title> 
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css2.css">
</head>
<body>
<?php
	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$datanascimento=$_POST["datanascimento"];
	$sexo=$_POST["sexo"];
	$profissao=$_POST["profissao"];
	$telefone=$_POST["telefone"];
	$endereco=$_POST["endereco"];
	$cidade=$_POST["cidade"];
	$estado=$_POST["estado"];
	$cep=$_POST["cep"];
	$username=$_POST["username"];
	$senha=$_POST["senha"];
	$confirma_senha=$_POST["confirma_senha"];
	
	$erro = 0;
		
		if(empty($username) || strlen($username) < 4){
			echo "Você deve preencher o username com pelo menos 4 caracteres.<br />";
		$erro = 1;
		}
		
		if(empty($senha) || strlen($senha) < 5){
			echo "Você deve preencher a senha com pelo menos 5 caracteres.<br />";
		$erro = 1;
		}
		
		if($confirma_senha != $senha){
			echo "A confirmação de senha deve ser igual à senha digitada.<br />";
			$erro = 1;
		}
		
		if(empty($confirma_senha)){
			echo "Você deve preencher a confirmação de senha corretamente.<br />";
			$erro = 1;
		}
		
		if($erro == 0){
			echo "Cadastro realizado com sucesso!!!";
		}
	?>
</html>