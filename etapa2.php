		<?php
			$nome=$_POST["nome"];
			$email=$_POST["email"];
			$datanascimento=$_POST["datanascimento"];
			$sexo=$_POST["sexo"];
			$profissao=$_POST["profissao"];

			//validação
			$erro = 0;

				if(empty($nome) || strstr($nome, ' ')==FALSE){
					echo "Voce deve preencher o nome corretamente.<br>";
					$erro = 1;
				} 

				if(strlen($email) < 3 || strstr($email, '@')==FALSE){
					echo "Voce deve preencher o e-mail corretamente.<br>";
					$erro = 1;
				}

				if(empty($datanascimento)) {
					echo "Voce deve preencher a data de nascimento corretamente.<br>";
					$erro = 1;
				}
				
				
				if(empty($profissao)) {
					echo "Voce deve preencher a profissao corretamente.<br>";
					$erro = 1;
				}
				
				if ($erro==0) {
					include 'etapa2a.php';
				}
		?>
