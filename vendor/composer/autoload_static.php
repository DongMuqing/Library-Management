<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d312f48f7a6d3b875e2f888f035bd65
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d312f48f7a6d3b875e2f888f035bd65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d312f48f7a6d3b875e2f888f035bd65::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0d312f48f7a6d3b875e2f888f035bd65::$classMap;

        }, null, ClassLoader::class);
    }
}