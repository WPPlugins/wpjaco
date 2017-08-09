<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf77f23e3cb224f25331ad0162530a556
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            's3rgiosan\\Jaco\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        's3rgiosan\\Jaco\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static $classMap = array (
        's3rgiosan\\Jaco\\Admin' => __DIR__ . '/../..' . '/lib/Admin.php',
        's3rgiosan\\Jaco\\Frontend' => __DIR__ . '/../..' . '/lib/Frontend.php',
        's3rgiosan\\Jaco\\I18n' => __DIR__ . '/../..' . '/lib/I18n.php',
        's3rgiosan\\Jaco\\Plugin' => __DIR__ . '/../..' . '/lib/Plugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf77f23e3cb224f25331ad0162530a556::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf77f23e3cb224f25331ad0162530a556::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf77f23e3cb224f25331ad0162530a556::$classMap;

        }, null, ClassLoader::class);
    }
}