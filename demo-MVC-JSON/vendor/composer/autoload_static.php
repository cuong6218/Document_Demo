<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80ab03ea43a93f60a96e2328b28b9132
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80ab03ea43a93f60a96e2328b28b9132::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80ab03ea43a93f60a96e2328b28b9132::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
