<?php
//require_once 'Controller/LoginCadastro/IndexController.php';
require 'vendor/autoload.php';
//require 'Init.php';
//$a = new Autoload();
//require 'App/Init.php';
//$b = new Base\Instituicao();
//echo '<br />';
//$i = new Controllers\ProfessorController\Init();
//echo '<br />';
//$a = new Base\Disciplina('asd', 'asd', 'asd');


/*$c = new IndexController();
$c->ignite();*/
//$a->salvar('nome', 'email', 'senha', 'instituicao');
//(new Model\DAO\Factory\Connection)->getInstancia();
//echo phpinfo();
//$con = new PDOStatement('mysql:host=localhost;dbname=DuredalDB', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$cad = new \Model\DAO\InstituicaoDAO();
$instituicao = new Model\Base\Instituicao();
$instituicao->setNome("testepdo");
$instituicao->setData_Cadastro(11111111);
$instituicao->setEmail("testepdo");
$instituicao->setSenha("testepdo");
$cad->insert($instituicao);