<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19f6494ed67eb749c884a58b60b4299c
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Waitlisted\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Waitlisted\\' => 
        array (
            0 => __DIR__ . '/..' . '/Waitlisted/waitlisted-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19f6494ed67eb749c884a58b60b4299c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19f6494ed67eb749c884a58b60b4299c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
