<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e5bf143b3a427c75293a6674ba754ad
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SMTPValidateEmail\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SMTPValidateEmail\\' => 
        array (
            0 => __DIR__ . '/..' . '/zytzagoo/smtp-validate-email/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e5bf143b3a427c75293a6674ba754ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e5bf143b3a427c75293a6674ba754ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e5bf143b3a427c75293a6674ba754ad::$classMap;

        }, null, ClassLoader::class);
    }
}
