<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfcdec66ab5bde46656dbb1a36651e1bf
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

        spl_autoload_register(array('ComposerAutoloaderInitfcdec66ab5bde46656dbb1a36651e1bf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfcdec66ab5bde46656dbb1a36651e1bf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfcdec66ab5bde46656dbb1a36651e1bf::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
