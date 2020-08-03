<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda79940cfd3cd48b875c8792cd435157
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Infureal\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Infureal\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda79940cfd3cd48b875c8792cd435157::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda79940cfd3cd48b875c8792cd435157::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}