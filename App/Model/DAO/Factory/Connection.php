<?php

namespace Model\DAO\Factory;

class Connection {

    public static $instancia;
    private $user;
    private $banco;
    private $senha;
    private $servidor;

    function __construct() {
          $this->user = "root";
          $this->banco = "DurendalDB";
          $this->senha = "";
          $this->servidor = "localhost";
    }

    public static function getInstancia() {
        if (!isset(self::$instancia)) {
            try {
                self::$instancia = new PDO('mysql:host=localhost;dbname=DuredalDB', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instancia->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$instancia;
    }

    public function conectar() {
        try {
            if (is_null(self::$instancia)) {
                self::$instancia = new PDO('mysql:host=' . $this->servidor . ';dbname=' . $this->banco, $this->user, $this->senha);
            }
            return self::$instancia;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

}

?>