<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28506ffcce7a6c5f4f879186e8e5df6c
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Opis\\Database\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Opis\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/database/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28506ffcce7a6c5f4f879186e8e5df6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28506ffcce7a6c5f4f879186e8e5df6c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit28506ffcce7a6c5f4f879186e8e5df6c::$classMap;

        }, null, ClassLoader::class);
    }
}