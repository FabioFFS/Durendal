<?php
namespace Model\Base;

class Instituicao extends Usuario{
    private $data_cadastro;
    
    function setData_Cadastro($data_cadastro) {
        $this->data_cadastro;
    }
    function getData_Cadastro() {
        return $this->data_cadastro;
    }
}
