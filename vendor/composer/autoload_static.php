<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f72734b30fe024d932f890c78436474
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpImap\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpImap\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-imap/php-imap/src/PhpImap',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f72734b30fe024d932f890c78436474::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f72734b30fe024d932f890c78436474::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
