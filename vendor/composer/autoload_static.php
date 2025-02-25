<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb61b79819ae9165507c7f3b1ebfa76b0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sources\\' => 8,
        ),
        'O' => 
        array (
            'Outils\\' => 7,
        ),
        'M' => 
        array (
            'Modeles\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sources\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Outils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/resources/Outils',
        ),
        'Modeles\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Modeles',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Modeles\\PdoGsb' => __DIR__ . '/../..' . '/src/Modeles/PdoGsb.php',
        'Outils\\Utilitaires' => __DIR__ . '/../..' . '/resources/Outils/Utilitaires.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb61b79819ae9165507c7f3b1ebfa76b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb61b79819ae9165507c7f3b1ebfa76b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb61b79819ae9165507c7f3b1ebfa76b0::$classMap;

        }, null, ClassLoader::class);
    }
}
