<?php

$app->get('/hello/{name}', function($params /*, User $model*/) {
    //return 'Meu nome é ' . $params[1];
    return $params;
 });