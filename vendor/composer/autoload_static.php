<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07b9ce60a8c0e448cface59e5503d8b2
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07b9ce60a8c0e448cface59e5503d8b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07b9ce60a8c0e448cface59e5503d8b2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit07b9ce60a8c0e448cface59e5503d8b2::$classMap;

        }, null, ClassLoader::class);
    }
}
