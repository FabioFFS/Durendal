<?php
namespace Model\Base;

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

    public function getNome()
    {
        return $this->nome; 
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getTurno()
    {
        return $this->turno;
    }

    public function setTurno($turno)
    {
        $this->turno = $turno;    
    }

    public function getDias()
    {
        return $this->dias;
    }

    public function setDias($dias)
    {
        $this->dias = $dias;
    }

    public function getAulas()
    {
        return $this->aulas;
    }

    public function setAulas($aulas)
    {
        $this->aulas = $aulas;
    }
}