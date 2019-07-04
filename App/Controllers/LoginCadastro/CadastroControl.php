<?php

namespace Controllers\LoginCadastro;

//require '../../View/Cadastro/Cadastro.php';
//require_once '../../Model/DAO/Factory/Funcoes.php';
//require_once '../../Model/Base/Professor.php';
//require_once '../../Model/base/Instituicao.php';

class CadastroControl {

    private $nome;
    private $email;
    private $senha;
    private $tipo;
    private $repetir_senha;
    private $novo;

    //Verifica se as variaveis estao todas setadas
    function checkVariables() {
        if ($_POST['nome'] and $_POST['email'] and $_POST['senha'] and $_POST['repetir_senha']) {

            $this->senha = cripto($_POST['senha']);
            $this->repetir_senha = cripto($_POST['repetir_senha']);

            if ($this->senha != $this->repetir_senha) {
                return false;
            } else {
                $this->nome = $_POST['nome'];
                $this->email = $_POST['email'];
                $this->
                        salvar($this->nome, $this->email, $this->senha, $this->tipo);
            }
        } else {
            return false;
        }
    }

    public function salvar($nome, $email, $senha, $tipo) {
        //$this->nome = $_POST['nome'];
        //$this->email = $_POST['email'];
        //$this->senha = (new Funcoes())->cripto($_POST['senha']);
        //$this->repetir_senha = (new Funcoes())->cripto($_POST['repetir_senha']);
        $this->tipo = $_POST['tipo'];
        if ($tipo == 'instituicao') {
            $instituicao = new \Model\Base\Instituicao();
            $instituicaoDAO = new \Model\DAO\InstituicaoDAO();

            $instituicao->setNome($nome);
            $instituicao->setEmail($email);
            $instituicao->setSenha($senha);
            $instituicao->setData_Cadastro(123456789);

            $instituicaoDAO->insert($instituicao);
        } else {
            $profesorr = new Professor($nome, $email, $senha, $disciplina, $dias, $aulas);
        }
    }

}

/* if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $cad = new CadastroControl();
  $cad->check();
  } */
?>