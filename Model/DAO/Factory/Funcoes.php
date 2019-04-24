<?php
require_once 'Connection.php';
require 'password.php';

class Funcoes {
    
    public function cripto($senha) {
        return password_hash($senha, PASSWORD_DEFAULT);
    }
}
