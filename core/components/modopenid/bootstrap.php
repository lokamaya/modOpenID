<?php
/**
 * @var \MODX\Revolution\modX $modx
 * @var array $namespace
 */

// Add your classes to modx's autoloader
\MODX\Revolution\modX::getLoader()->addPsr4('modOpenID\\', $namespace['path'] . 'src/');

if (!$modx->services->has('modopenid')) {
    // Register base class in the service container
    $modx->services->add('modopenid', function($c) use ($modx) {
        return new \modOpenID\modOpenID($modx);
    });

    // Load packages model, uncomment if you have DB tables
    //$modx->addPackage('modOpenID\Model', $namespace['path'] . 'src/', null, 'modOpenID\\');
}
