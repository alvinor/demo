<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4bd37483c5b647b61ebd48643d122ab
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'bd9634f2d41831496de0d3dfe4c94881' => __DIR__ . '/..' . '/symfony/polyfill-php56/bootstrap.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Util\\' => 22,
            'Symfony\\Polyfill\\Php56\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\Console\\' => 26,
            'Swoole\\' => 7,
            'SuperClosure\\' => 13,
            'Seld\\PharUtils\\' => 15,
            'Seld\\JsonLint\\' => 14,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PhpParser\\' => 10,
        ),
        'J' => 
        array (
            'JsonSchema\\' => 11,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'E' => 
        array (
            'EasySwoole\\' => 11,
        ),
        'C' => 
        array (
            'Cron\\' => 5,
            'Composer\\XdebugHandler\\' => 23,
            'Composer\\Spdx\\' => 14,
            'Composer\\Semver\\' => 16,
            'Composer\\CaBundle\\' => 18,
            'Composer\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-util',
        ),
        'Symfony\\Polyfill\\Php56\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php56',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Swoole\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/swoole-ide-helper/src',
        ),
        'SuperClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeremeamia/SuperClosure/src',
        ),
        'Seld\\PharUtils\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/phar-utils/src',
        ),
        'Seld\\JsonLint\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/jsonlint/src/Seld/JsonLint',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'JsonSchema\\' => 
        array (
            0 => __DIR__ . '/..' . '/justinrainbow/json-schema/src/JsonSchema',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'EasySwoole\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/easyswoole/src',
        ),
        'Cron\\' => 
        array (
            0 => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron',
        ),
        'Composer\\XdebugHandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/xdebug-handler/src',
        ),
        'Composer\\Spdx\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/spdx-licenses/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/composer/src/Composer',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4bd37483c5b647b61ebd48643d122ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4bd37483c5b647b61ebd48643d122ab::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}