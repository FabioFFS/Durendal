<?php
class Professor {
    private $nome;
    private $email;
    private $senha;
    private $disciplina;
    private $dias;
    private $aulas;
    
    
    /*function __construct($nome, $email, $senha, $disciplina, $dias, $aulas ) {
        $this->nome = $nome;
        $this->disciplina = new Discoplina();
        $this->dias = $dias;
        $this->aulas = $aulas;
        $this->email = $email;
    }*/

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDisciplina()
    {
        return $this->disciplina;
    }

    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}
