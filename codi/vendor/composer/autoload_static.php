<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteef4b74c06d457a8030219d9e93c2623
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IPv4\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IPv4\\' => 
        array (
            0 => __DIR__ . '/..' . '/markrogoyski/ipv4-subnet-calculator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteef4b74c06d457a8030219d9e93c2623::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteef4b74c06d457a8030219d9e93c2623::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteef4b74c06d457a8030219d9e93c2623::$classMap;

        }, null, ClassLoader::class);
    }
}
