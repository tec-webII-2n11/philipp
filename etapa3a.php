<!doctype html>
<html lang="pt-br">
	<head> 
		<title>Desenvolvendo Websites com PHP</title> 
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css2.css">
	</head>
	<body> 
		<h1>Cadastramento - Etapa 3 de 3</h1>

		<form method="POST" action="cadastro.php"> 
			<fieldset>
				<legend>Cadastro - Etapa 3</legend>
				<input type="hidden" name="nome" value="<?php echo $nome; ?>"> 
				<input type="hidden" name="email" value="<?php echo $email; ?>"> 
				<input type="hidden" name="datanascimento" value="<?php echo $datanascimento; ?>"> 
				<input type="hidden" name="sexo" value="<?php echo $sexo; ?>"> 
				<input type="hidden" name="profissao" value="<?php echo $profissao; ?>"> 
				<input type="hidden" name="telefone" value="<?php echo $telefone; ?>"> 
				<input type="hidden" name="endereco" value="<?php echo $endereco; ?>"> 
				<input type="hidden" name="cidade" value="<?php echo $cidade; ?>"> 
				<input type="hidden" name="estado" value="<?php echo $estado; ?>"> 
				<input type="hidden" name="cep" value="<?php echo $cep; ?>"> 

				<p><label for="username">Username: </label><input type="text" name="username" id="username" size="10"></p> 
				<p><label for="senha">Senha: </label><input type="password" name="senha" id="senha" size="10"></p> 
				<p><label for="confirma_senha">Confirme sua Senha: </label><input type="password" name="confirma_senha" id="confirma_senha" size="10"></p> 
				<p><input type="submit" value="Finalizar Cadastro" name="fim"></p> 
			</fieldset>
		</form> 
	</body> 
</html>