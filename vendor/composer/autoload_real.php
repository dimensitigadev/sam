<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit473d7bce58256629aa13bae86cd31f5b
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

        spl_autoload_register(array('ComposerAutoloaderInit473d7bce58256629aa13bae86cd31f5b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit473d7bce58256629aa13bae86cd31f5b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit473d7bce58256629aa13bae86cd31f5b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
