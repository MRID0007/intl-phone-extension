<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite49adbd27bc8c9a0818470bb58b1a8cd
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Michaelridgway\\IntlPhoneExtension\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Michaelridgway\\IntlPhoneExtension\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite49adbd27bc8c9a0818470bb58b1a8cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite49adbd27bc8c9a0818470bb58b1a8cd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite49adbd27bc8c9a0818470bb58b1a8cd::$classMap;

        }, null, ClassLoader::class);
    }
}
