<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit003b64b8848433fd6dff33c8e106a26c
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

        spl_autoload_register(array('ComposerAutoloaderInit003b64b8848433fd6dff33c8e106a26c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit003b64b8848433fd6dff33c8e106a26c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit003b64b8848433fd6dff33c8e106a26c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}