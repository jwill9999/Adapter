<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffcf6b2f8bcd6ff582f620d86f5d532f
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Reader\\Nook\\' => 12,
            'Reader\\Kindle\\' => 14,
            'Reader\\Book\\' => 12,
            'Reader\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Reader\\Nook\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Reader/Nook',
        ),
        'Reader\\Kindle\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Reader/Kindle',
        ),
        'Reader\\Book\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Reader/Book',
        ),
        'Reader\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Reader',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitffcf6b2f8bcd6ff582f620d86f5d532f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffcf6b2f8bcd6ff582f620d86f5d532f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}