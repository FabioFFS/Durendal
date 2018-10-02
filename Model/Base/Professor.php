<?php
class Professor {
    private $nome;
    private $disciplina;
    private $dias;
    private $aulas;
    private $email;
    
    function __construct($nome, $disciplina, $dias, $aulas, $email) {
        $this->nome = $nome;
        $this->disciplina = new Discoplina();
        $this->dias = $dias;
        $this->aulas = $aulas;
        $this->email = $email;
    }
    function getNome(){
        return $this->nome;
    }
    function getDisciplina(){
        return $this->disciplina;
    }
    function getDias(){
        return $this->dias;
    }
    function getAulas(){
        return $this->aulas;
    }
    function getEmail(){
        return $this->email;
    }
}
