<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19b0bbaa8bd1a35b12f7699609887080
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19b0bbaa8bd1a35b12f7699609887080::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19b0bbaa8bd1a35b12f7699609887080::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
