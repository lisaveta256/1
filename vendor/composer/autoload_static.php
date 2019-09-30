<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59b3627f15f8cabd8de0cdb0343470c3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59b3627f15f8cabd8de0cdb0343470c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59b3627f15f8cabd8de0cdb0343470c3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}