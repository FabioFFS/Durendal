<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9432e224800528136ead096394b2546
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\DAO\\Factory\\' => 18,
            'Model\\DAO\\' => 10,
            'Model\\Base\\' => 11,
        ),
        'C' => 
        array (
            'Controllers\\ProfessorController\\' => 32,
            'Controllers\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\DAO\\Factory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Model/DAO/Factory',
        ),
        'Model\\DAO\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Model/DAO',
        ),
        'Model\\Base\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Model/Base',
        ),
        'Controllers\\ProfessorController\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controller/ProfessorController',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controller',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Controllers\\ProfessorController\\Init' => __DIR__ . '/../..' . '/App/Controller/ProfessorController/Init.php',
        'Model\\Base\\Disciplina' => __DIR__ . '/../..' . '/App/Model/Base/Disciplina.php',
        'Model\\Base\\Instituicao' => __DIR__ . '/../..' . '/App/Model/Base/Instituicao.php',
        'Model\\Base\\Usuario' => __DIR__ . '/../..' . '/App/Model/Base/Usuario.php',
        'Model\\DAO\\CadastroDAO' => __DIR__ . '/../..' . '/App/Model/DAO/InstituicaoDAO.php',
        'Model\\DAO\\DisciplinaDAO' => __DIR__ . '/../..' . '/App/Model/DAO/DisciplinaDAO.php',
        'Model\\DAO\\Factory\\Connection' => __DIR__ . '/../..' . '/App/Model/DAO/Factory/Connection.php',
        'Model\\DAO\\TurmaDAO' => __DIR__ . '/../..' . '/App/Model/DAO/TurmaDAO.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9432e224800528136ead096394b2546::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9432e224800528136ead096394b2546::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb9432e224800528136ead096394b2546::$classMap;

        }, null, ClassLoader::class);
    }
}
