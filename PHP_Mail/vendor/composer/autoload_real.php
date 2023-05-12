<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7b9f7b8d2775c2dcc8c8421883fa018e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit7b9f7b8d2775c2dcc8c8421883fa018e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7b9f7b8d2775c2dcc8c8421883fa018e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7b9f7b8d2775c2dcc8c8421883fa018e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
