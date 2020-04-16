<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9652f750dd136334778547177597b8d0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Symfony\\Component\\Console\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/console',
            ),
        ),
    );

    public static $classMap = array (
        'GreetCommand' => __DIR__ . '/../..' . '/Vendor/Commands/GreetCommand.php',
        'MakeAuth' => __DIR__ . '/../..' . '/Vendor/Commands/MakeAuth.php',
        'MakeModel' => __DIR__ . '/../..' . '/Vendor/Commands/MakeModel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9652f750dd136334778547177597b8d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9652f750dd136334778547177597b8d0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9652f750dd136334778547177597b8d0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9652f750dd136334778547177597b8d0::$classMap;

        }, null, ClassLoader::class);
    }
}
