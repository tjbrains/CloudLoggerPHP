<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6129ff2965c0011f72bcde139ae548e6
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

        spl_autoload_register(array('ComposerAutoloaderInit6129ff2965c0011f72bcde139ae548e6', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6129ff2965c0011f72bcde139ae548e6', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6129ff2965c0011f72bcde139ae548e6::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}