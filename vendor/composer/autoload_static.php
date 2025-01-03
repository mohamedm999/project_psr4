<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66e30abafa4efd9f899aaf541d35025d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit66e30abafa4efd9f899aaf541d35025d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66e30abafa4efd9f899aaf541d35025d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit66e30abafa4efd9f899aaf541d35025d::$classMap;

        }, null, ClassLoader::class);
    }
}
