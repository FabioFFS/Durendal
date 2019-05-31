<?php
require_once 'Connection.php';
//require_once 'password.php';

class Funcoes {
    
    //No banco de dados , colocar varchar de 255
    public function cripto($senha) {
        return password_hash($senha, PASSWORD_DEFAULT);
    }
    
    public function comparar($senha, $repetir_senha){
        if($this->cripto($senha)==$this->cripto($repetir_senha)){
            return true;
        }else{
            return false;
        }
    }
}
