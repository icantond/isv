<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2cbc1c2b411bcb943346c3d1f70841fe
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acer\\Root\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acer\\Root\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2cbc1c2b411bcb943346c3d1f70841fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2cbc1c2b411bcb943346c3d1f70841fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2cbc1c2b411bcb943346c3d1f70841fe::$classMap;

        }, null, ClassLoader::class);
    }
}
