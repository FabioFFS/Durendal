<?php
//require '../../View/Cadastro/Cadastro.php';
echo '1';
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

	private function salvar(){
		
			return boolean;
	}
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cad = new CadastroControl();
    $cad->checkAll();
}
?>