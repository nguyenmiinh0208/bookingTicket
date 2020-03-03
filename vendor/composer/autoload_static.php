<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d2ba9f5f91569c04312fd0e34d310b4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'A' => 
        array (
            'Analog' => 
            array (
                0 => __DIR__ . '/..' . '/analog/analog/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d2ba9f5f91569c04312fd0e34d310b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d2ba9f5f91569c04312fd0e34d310b4::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4d2ba9f5f91569c04312fd0e34d310b4::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}