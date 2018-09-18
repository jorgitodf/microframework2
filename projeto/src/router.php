<?php

$app->get('/hello/{name}', function($params) use ($app) {
    $c = $app->getContainer();
    $users = $app->getContainer()['model_users'];
    $data = $users->findAll();
    return  $c['view']->render('index.html.twig', ['users' => $data]);
 });