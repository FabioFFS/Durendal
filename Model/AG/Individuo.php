<?php
    class Individuo{
        private $identificacao;
        private $cromo;
        private $nota;

       public function getIdentificacao(){
           return $this->identificacao;
       } 

       public function setIdentificacao($identificacao){
            $this->identificacao = $identificacao;
       }

       public function setCromo($cromo){
            $this->cromo = $cromo;
       }

       public function getCromo(){
           return $this->cromo;
       }

       public function setNota($nota){
            $this->nota = $nota;
       }
    }

?>