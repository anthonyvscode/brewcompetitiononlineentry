<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde34b84a239100cdca6f0afa3feb4cda
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde34b84a239100cdca6f0afa3feb4cda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde34b84a239100cdca6f0afa3feb4cda::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
