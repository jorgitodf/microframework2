<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Twig\\' => array($vendorDir . '/twig/twig/src'),
    'Symfony\\Polyfill\\Mbstring\\' => array($vendorDir . '/symfony/polyfill-mbstring'),
    'Symfony\\Polyfill\\Ctype\\' => array($vendorDir . '/symfony/polyfill-ctype'),
    'Symfony\\Component\\Translation\\' => array($vendorDir . '/symfony/translation'),
    'Psr\\SimpleCache\\' => array($vendorDir . '/psr/simple-cache/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'Illuminate\\Support\\' => array($vendorDir . '/illuminate/support'),
    'Illuminate\\Contracts\\' => array($vendorDir . '/illuminate/contracts'),
    'ErikFig\\ORM\\' => array($vendorDir . '/erikfig/son-orm/src'),
    'Doctrine\\Common\\Inflector\\' => array($vendorDir . '/doctrine/inflector/lib/Doctrine/Common/Inflector'),
    'App\\Framework\\' => array($baseDir . '/src'),
    'App\\' => array($baseDir . '/app', $vendorDir . '/erikfig/son-orm/app'),
    '' => array($vendorDir . '/nesbot/carbon/src'),
);
