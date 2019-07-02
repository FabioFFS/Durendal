<?php
require_once '/Factory/Funcoes.php';
require_once '/Factory/Connection.php';

class CadastroDAO {
    private $con;
    
    private $nome;
    private $email;
    private $senha;
    
    function __construct() {
        $this->con = new Connection();
    }
    
    function insert($instituicao){
        try{
            $cst = $this->con->conectar()->prepare("SELECT 'nome', 'email', 'senha'");
            $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
            $cst->bindParam(":senha", $this->senha, PDO::PARAM_STR);
            
            
        } catch (PDOException $ex) {
          return 'Erro: '+$ex->getMessage();
          
        }
    }
    function delete($dado){
        try {
            
        } catch (PDOException $ex) {
            
        }
    }
    function update($dado){
        try{
            
        } catch (PDOException $ex) {
            
        }
    }
    function select($dado){
        try{
            
        } catch (PDOException $ex) {
            
        }
    }
}
