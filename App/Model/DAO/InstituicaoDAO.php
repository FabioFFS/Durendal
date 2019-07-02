<?php
namespace Model\DAO;

class InstituicaoDAO {
    private $con;
    private $nome;
    
    function __construct() {
        $this->con = new Connection();
    }
    
    function insert($objeto){
        try{
            $cst = $this->con->conectar()->prepare("INSERT INTO Instituicao ('nome', data_cadastro, 'senha', 'email') VALUES (:nome, :data_cadastro, :senha, :email)");
            $cst->bindParam(":nome", $objeto->nome, PDO::PARAM_STR);
            $cst->bindParam(":data_cadastro", $objeto->nome, PDO::PARAM_INT);
            $cst->bindParam(":email", $objeto->nome, PDO::PARAM_STR);
            $cst->bindParam(":senha", $objeto->nome, PDO::PARAM_STR);
            
            
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
