<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b0c17fcd5bc53af982eea46c0303896
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExercicioComposer\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExercicioComposer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9b0c17fcd5bc53af982eea46c0303896::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9b0c17fcd5bc53af982eea46c0303896::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
