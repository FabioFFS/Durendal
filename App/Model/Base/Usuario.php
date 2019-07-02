<?php
namespace Model\Base;

class Usuario {
    private $nome;
    private $senha;
    private $email;
    
function getNome(){
        return $this->nome;
    }
function getSenha(){
        return $this->senha;
    }
function getEmail(){
        return $this->email;
    }
function setNome($nome){
        $this->nome = $nome;
    }
function setEmail($email){
        $this->email = $email;
    }
function setSenha($senha){
        $this->senha = $senha;
    }

}
