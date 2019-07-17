<?php

namespace Model\Base;

class Professor extends Usuario {

    private $disciplina;
    private $dias;
    private $aulas;

    public function getDisciplina() {
        return $this->disciplina;
    }

    public function setDisciplina($disciplina) {
        $this->disciplina = $disciplina;
    }

    public function getDias() {
        return $this->dias;
    }

    public function setDias($dias) {
        $this->dias = $dias;
    }

    public function getAulas() {
        return $this->aulas;
    }

    public function setAulas($aulas) {
        $this->aulas = $aulas;
    }

}
