<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e1029b5a5eaedf915eee01555ba627c
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'cURL\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'cURL\\' => 
        array (
            0 => __DIR__ . '/..' . '/stil/curl-easy/src',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e1029b5a5eaedf915eee01555ba627c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e1029b5a5eaedf915eee01555ba627c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e1029b5a5eaedf915eee01555ba627c::$classMap;

        }, null, ClassLoader::class);
    }
}
