<?php

use App\Framework\Router\Router;

$router = new Router();

$router->get('/hello', function() {
   return 'Jorgito';
});

