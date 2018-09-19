<?php

use ErikFig\ORM\Drivers\MysqlPdo;
use App\Models\Users;
use App\Models\Pages;
use Twig_Loader_Filesystem;
use Twig_Environment;
use Twig_Extension_Debug;

$container['view'] = function($c) {
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/../views');
    $twig = new Twig_Environment($loader, [
        'cache' => __DIR__ . ' /../cache/views',
        'debug' => true
    ]);
    $twig->addExtension(new Twig_Extension_Debug);
    return $twig;
};


$container['pdo'] = function($c) {
    return new PDO('mysql:host=localhost;dbname=curso_orm_php', 'root', 'root');
};

$container['model_users'] = $container->factory(function($c) {
    $driver = new MysqlPdo($c['pdo']);
    $model =  new Users;
    $model->setDriver($driver);
    return $model;
});

$container['model_pages'] = $container->factory(function($c) {
    $driver = new MysqlPdo($c['pdo']);
    $model =  new Pages;
    $model->setDriver($driver);
    return $model;
}); 