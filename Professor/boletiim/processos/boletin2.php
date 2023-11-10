<?php
	
	if(isset($_POST['operacao'])){
		
		include_once('../class/Boletim2.php');
		include_once('../class/Mensagem.php');
		
		$operacao = (int) $_POST['operacao'];
		$b = new Boletim2;
		$m = new Mensagem;
		
		switch($operacao){
			
			case 1:
			
				//mesmo esquema utilizado para excluir um aluno
				if(isset($_POST['excluir'])){

					$id = $_POST['excluir'];

					$b->excluir($id);
					
					$m->setMensagem("Boletim excluído com sucesso!");
					
					header("Location: ../boletim2.php");

				}
			break;
		}
	}
?>