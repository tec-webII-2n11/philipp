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

			//validação
			$erro = 0;

				if(empty($telefone) || strlen($telefone) < 8){
					echo "Voce deve preencher o telefone corretamente.<br />";
					$erro = 1;
				}

				if(empty($endereco) || strlen($endereco) < 5){
					echo "Voce deve preencher o endereco corretamente.<br />";
					$erro = 1;
				}

				if(empty($cidade) || strlen($cidade) < 2){
					echo "Voce deve preencher a cidade corretamente.<br />";
					$erro = 1;
				}
				
				if(empty($estado) || strlen($estado) != 2){
					echo "Voce deve preencher o estado corretamente.<br />";
					$erro = 1;
				}
				
				if(empty($cep) || strstr($cep,'-')==FALSE || strlen($cep) < 9){
					echo "Voce deve preencher o CEP corretamente.<br />";
					$erro = 1;
				}
				
				if ($erro==0) {
					include 'etapa3a.php';
				}
		?>
