<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0602d62bf590c3b5f8bc64a43969e55d
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LearningPHP\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LearningPHP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0602d62bf590c3b5f8bc64a43969e55d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0602d62bf590c3b5f8bc64a43969e55d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0602d62bf590c3b5f8bc64a43969e55d::$classMap;

        }, null, ClassLoader::class);
    }
}
