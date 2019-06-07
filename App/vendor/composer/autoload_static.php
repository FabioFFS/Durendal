<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9432e224800528136ead096394b2546
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'View\\' => 5,
        ),
        'A' => 
        array (
            'App\\Controller\\' => 15,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/View',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controller',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9432e224800528136ead096394b2546::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9432e224800528136ead096394b2546::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
