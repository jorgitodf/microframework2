<?php

use App\Framework\Router\Router;
use App\Framework\Di\Resolver;
use App\Framework\Renderer\Renderer;

$app = new App\Framework\App;
$app->setRenderer(new App\Framework\Renderer\Renderer);

require __DIR__ . '/src/router.php';

$app->run();
