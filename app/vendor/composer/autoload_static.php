<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d9e75315dcdfd29b82ec70c0ae94a4f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Services\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/services',
        ),
    );

    public static $classMap = array (
        'Services\\RouteService' => __DIR__ . '/../..' . '/core/services/routeservice.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d9e75315dcdfd29b82ec70c0ae94a4f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d9e75315dcdfd29b82ec70c0ae94a4f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d9e75315dcdfd29b82ec70c0ae94a4f::$classMap;

        }, null, ClassLoader::class);
    }
}