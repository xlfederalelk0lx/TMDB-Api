<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcba038c1c14db00ebb85150c0f43fc10
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TMDB\\' => 5,
        ),
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TMDB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/src',
        ),
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcba038c1c14db00ebb85150c0f43fc10::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcba038c1c14db00ebb85150c0f43fc10::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
