<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f36e85292f6759d8e817cee2f6fbc9a
{
    public static $classMap = array (
        'Attack' => __DIR__ . '/../..' . '/Classes/Attack.php',
        'EnergyType' => __DIR__ . '/../..' . '/Classes/EnergyType.php',
        'PokeMon' => __DIR__ . '/../..' . '/Classes/PokeMon.php',
        'Resistance' => __DIR__ . '/../..' . '/Classes/Resistance.php',
        'Weakness' => __DIR__ . '/../..' . '/Classes/Weakness.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0f36e85292f6759d8e817cee2f6fbc9a::$classMap;

        }, null, ClassLoader::class);
    }
}