<?php
namespace Base;

class Disciplina
{
    private $nome;
    private $dificuldade;
    private $minimo;

    public function __construct($nome, $dificuldade, $minimo)
    {
        $this->nome = $nome;
        $this->dificuldade = $dificuldade;
        $this->minimo = $minimo;
        echo "Base disciplina";
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDificuldade()
    {
        return $this->dificuldade;
    }

    public function setDificuldade($dificuldade)
    {
        $this->dificuldade = $dificuldade;
    }

    public function getMinimo()
    {
        return $this->minimo;
    }

    public function setMinimo($minimo)
    {
        $this->minimo = $minimo;
    }
}