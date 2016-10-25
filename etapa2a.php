<!doctype html>
<html lang="pt-br">
	<head> 
		<title>Desenvolvendo Websites com PHP</title> 
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css2.css">
	</head>
	<body> 
		<h1>Cadastramento - Etapa 2 de 3</h1> 
		<form method="POST" action="etapa3.php"> 
			<fieldset>
				<legend>Cadastro - Etapa 2</legend>
				<input type="hidden" name="nome" value="<?php echo $nome; ?>"> 
				<input type="hidden" name="email" value="<?php echo $email; ?>"> 
				<input type="hidden" name="datanascimento" value="<?php echo $datanascimento; ?>"> 
				<input type="hidden" name="sexo" value="<?php echo $sexo; ?>"> 
				<input type="hidden" name="profissao" value="<?php echo $profissao; ?>"> 
				
				<p><label for="telefone">Telefone: </label><input type="text" name="telefone" id="telefone" size="20"></p> 
				<p><label for="endereco">Endereco: </label><input type="text" name="endereco" id="endereco" size="20"></p> 
				<p><label for="cidade">Cidade: </label><input type="text" name="cidade" id="cidade" size="20">&nbsp;&nbsp;&nbsp; 
					<label for="estado">Estado: </label><input type="text" name="estado" id="estado" size="2"></p> 
				<p><label for="cep">CEP: </label><input type="text" name="cep" id="cep" size="9"></p> 
				<p><input type="submit" value="Prosseguir &gt;&gt;" name="prosseguir"></p> 
			</fieldset>
		</form> 
	</body> 
</html> 