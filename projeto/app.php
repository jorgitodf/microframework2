<?php

use App\Framework\Router\Router;
use App\Framework\Di\Resolver;
use App\Framework\Renderer\Renderer;
use Pimple\Container;
 

$app = new App\Framework\App;
$app->setRenderer(new App\Framework\Renderer\Renderer);

$container = new Container();

require __DIR__ . '/src/config.php';   

$app->setContainer($container);

require __DIR__ . '/src/router.php';
 
$app->run();
