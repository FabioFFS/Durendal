<?php 
	include_once '../../Model/Base/Turma.php';
	include_once '../../Model/DAO/TurmaDAO.php';

	class TurmaController
	{
		//$turmas = new Turma(/*$_POST['numero_turmas'],$_POST['aulas'], $_POST['dias'], $_POST['turno']*/);
		function set(){
			if(isset($_POST['numero_turmas'])){
				
			}
		}

		function salvar($turmas, $aulas, $dias, $turno){
			if(isset($_POST['numero_turmas'])){
				$turmas = $_POST['numero_turmas'];
				$aulas = $_POST['aulas'];
				$dias = $_POST['dias'];
				$turno = $_POST['turno'];
				
				echo "Veio";
			}else {
				echo "nao veio";
			}
		}
	}
 ?>