<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Services\\' => array($baseDir . '/core/services'),
    'Psr\\Log\\' => array($vendorDir . '/psr/log/Psr/Log'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'PhpDocReader\\' => array($vendorDir . '/php-di/phpdoc-reader/src/PhpDocReader'),
    'Opis\\Closure\\' => array($vendorDir . '/opis/closure/src'),
    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
    'Models\\' => array($baseDir . '/core/models'),
    'Invoker\\' => array($vendorDir . '/php-di/invoker/src'),
    'Doctrine\\Common\\Lexer\\' => array($vendorDir . '/doctrine/lexer/lib/Doctrine/Common/Lexer'),
    'Doctrine\\Common\\Annotations\\' => array($vendorDir . '/doctrine/annotations/lib/Doctrine/Common/Annotations'),
    'DI\\' => array($vendorDir . '/php-di/php-di/src'),
    'Controllers\\' => array($baseDir . '/core/controllers'),
    'Annotations\\MER\\' => array($baseDir . '/core/annotations'),
    'Annotations\\Json\\' => array($baseDir . '/core/annotations'),
);
