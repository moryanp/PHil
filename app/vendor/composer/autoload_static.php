<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit231d27cd1e93f666ded6433a6f474295
{
    public static $files = array (
        '538ca81a9a966a6716601ecf48f4eaef' => __DIR__ . '/..' . '/opis/closure/functions.php',
        'b33e3d135e5d9e47d845c576147bda89' => __DIR__ . '/..' . '/php-di/php-di/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Services\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'PhpDocReader\\' => 13,
        ),
        'O' => 
        array (
            'Opis\\Closure\\' => 13,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
            'Models\\' => 7,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 22,
            'Doctrine\\Common\\Annotations\\' => 28,
            'DI\\' => 3,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
        'A' => 
        array (
            'Annotations\\MER\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/services',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpDocReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader',
        ),
        'Opis\\Closure\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/closure/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/models',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'Doctrine\\Common\\Lexer\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/lexer/lib/Doctrine/Common/Lexer',
        ),
        'Doctrine\\Common\\Annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/controllers',
        ),
        'Annotations\\MER\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/annotations',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit231d27cd1e93f666ded6433a6f474295::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit231d27cd1e93f666ded6433a6f474295::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit231d27cd1e93f666ded6433a6f474295::$classMap;

        }, null, ClassLoader::class);
    }
}
