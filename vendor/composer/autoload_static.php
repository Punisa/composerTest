<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8694f1400d7d667f3850dd026083e958
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'space\\' => 6,
            'space2\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'space\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class1',
        ),
        'space2\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class2',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8694f1400d7d667f3850dd026083e958::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8694f1400d7d667f3850dd026083e958::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
