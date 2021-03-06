<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe4a302f0227323956259ff905f2998f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe4a302f0227323956259ff905f2998f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe4a302f0227323956259ff905f2998f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe4a302f0227323956259ff905f2998f::$classMap;

        }, null, ClassLoader::class);
    }
}
