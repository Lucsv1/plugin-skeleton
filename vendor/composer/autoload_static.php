<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57c34d301b924b1bd921e41dae221958
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LucasGalindo\\Teste\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LucasGalindo\\Teste\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
            1 => __DIR__ . '/../..' . '/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit57c34d301b924b1bd921e41dae221958::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57c34d301b924b1bd921e41dae221958::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit57c34d301b924b1bd921e41dae221958::$classMap;

        }, null, ClassLoader::class);
    }
}
