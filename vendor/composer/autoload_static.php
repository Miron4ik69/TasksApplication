<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit595e17658bb0218d3a45db74152a91b0
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInit595e17658bb0218d3a45db74152a91b0' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit595e17658bb0218d3a45db74152a91b0' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'LoginController' => __DIR__ . '/../..' . '/controllers/LoginController.php',
        'PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'PostController' => __DIR__ . '/../..' . '/controllers/PostController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit595e17658bb0218d3a45db74152a91b0::$classMap;

        }, null, ClassLoader::class);
    }
}
