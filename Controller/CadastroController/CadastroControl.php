<?php
require '../View/Cadastro.php';

class CadastroControl{
	private $nome;
	private $email;
	private $senha;
	private $repetir_senha;

	function checkAll(){
		if($_POST['nome'] and $_POST['email'] and $_POST['senha'] and $_POST['repetir_senha']){
			echo "Deu bom =)";
		}else{
			echo "Deu ruim ae";
		}
	}

	function salvar(){
		
			return boolean;
	}
}
?>