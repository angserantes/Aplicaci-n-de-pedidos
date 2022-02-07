<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45bf8e68d1cd1236844c6b1d541a035b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45bf8e68d1cd1236844c6b1d541a035b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45bf8e68d1cd1236844c6b1d541a035b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit45bf8e68d1cd1236844c6b1d541a035b::$classMap;

        }, null, ClassLoader::class);
    }
}
