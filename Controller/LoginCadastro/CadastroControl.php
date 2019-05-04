<?php
//require '../../View/Cadastro/Cadastro.php';
require_once '../../Model/DAO/Factory/Funcoes.php';
require_once '../../Model/Base/Professor.php';
require_once '../../Model/base/Instituicao.php';
class CadastroControl{
	private $nome;
	private $email;
	private $senha;
        private $tipo;
	private $repetir_senha;
        
        private $novo;
        
        public function __construct() {
            $this->check();
            echo "as";
        }

        public function check(/*$nome, $email, $senha, $repetir_senha, $tipo*/) {
            if(isset($_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['repetir_senha'], $_POST['tipo']))
            {
                $this->nome = $_POST['nome'];
                $this->email = $_POST['email'];
                $this->senha = (new Funcoes())->cripto($_POST['senha']);
                $this->repetir_senha = (new Funcoes())->cripto($_POST['repetir_senha']);
                $this->tipo = $_POST['tipo'];
                
                echo "gravado";
                
                
                if((new Funcoes())->comparar($_POST['senha'], $_POST['repetir_senha']))
                {
                        if($_POST['tipo']=='professor')
                        {
                            $novo = new Professor($_POST['nome'], $_POST['email'], $senha, $disciplina, $dias, $aulas);
                            echo 'Senha: '.$this->senha;
                        }else
                        {
                            
                            echo 'Tipo: Insituição';
                            
                        }
                }else
                {
                    
                }
            }else{
               echo "Nothing here"; 
            }
        }
        
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
/*if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cad = new CadastroControl();
    $cad->checkAll();
}*/
?>