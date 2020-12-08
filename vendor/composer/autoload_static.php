<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc82a5309e694ab70d82a6f955aa26d9a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc82a5309e694ab70d82a6f955aa26d9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc82a5309e694ab70d82a6f955aa26d9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc82a5309e694ab70d82a6f955aa26d9a::$classMap;

        }, null, ClassLoader::class);
    }
}
