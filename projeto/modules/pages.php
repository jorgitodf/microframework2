<?php

$app->get('/', function ($params) use ($c) {
    $pages = $c['model_pages'];
    $data = $pages->findFirst(2);
    return $c['view']->render('render_page.html.twig', ['page' => $data]);
});

$app->get('/page/{id}', function ($params) use ($c) {
    $pages = $c['model_pages'];
    $data = $pages->findFirst($params[1]);
    return $c['view']->render('render_page.html.twig', ['page' => $data]);
}); 