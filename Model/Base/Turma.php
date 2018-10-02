<?php

class Turma {
    private $nome;
    private $turno;
    private $dias;
    private $aulas;
    
    public function __construct($nome, $turno, $dias, $aulas) {
        $this->nome = $nome;
        $this->turno = $turno;
        $this->dias = $dias;
        $this->aulas = $aulas;
    }
    
}
