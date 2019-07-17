<?php
namespace Model\DAO;
use PDO;
class InstituicaoDAO {
    private $con;
    private $nome;
    
    private static $tabela = "Instituicao";
    
    function __construct() {
        $this->con = new Factory\Connection();
        //$a = new Factory\Connection();
    }
    
    function insert($objeto){
        try{
            $cst = $this->con->getInstancia()->prepare("INSERT INTO ".self::$tabela." ('nome', data_cadastro, 'senha', 'email') VALUES (:nome, :data_cadastro, :senha, :email)");
            $cst->bindParam(":nome", $objeto->nome, PDO::PARAM_STR);
            $cst->bindParam(":data_cadastro", $objeto->nome, PDO::PARAM_INT);
            $cst->bindParam(":email", $objeto->nome, PDO::PARAM_STR);
            $cst->bindParam(":senha", $objeto->nome, PDO::PARAM_STR);
            echo "<br />a";
            
            
        } catch (PDOException $ex) {
          return 'Erro: '+$ex->getMessage();
          echo "<br />catch de insert";
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
