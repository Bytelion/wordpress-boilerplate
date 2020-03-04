<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit074cc3a682ab6af2f5be0694a50a5172
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit074cc3a682ab6af2f5be0694a50a5172::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit074cc3a682ab6af2f5be0694a50a5172::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
