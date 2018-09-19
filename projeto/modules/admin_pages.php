<?php

$app->get('/admin/pages', function($params) use ($c) {
    $pages = $c['model_pages'];
    $data = $pages->findAll();
    return  $c['view']->render('pages/index.html.twig', ['pages' => $data]);
 });
 
 $app->get('/admin/pages/new', function($params) use ($c) {
    return  $c['view']->render('pages/new.html.twig');
 });

 $app->post('/admin/pages/new', function($params) use ($c) {
    $model = $c['model_pages'];
    $model->title = filter_input(INPUT_POST, 'title');
    $model->body = filter_input(INPUT_POST, 'body');
    $model->save();
    header('location: /admin/pages');
 });

 $app->get('/admin/pages/{id}', function($params) use ($c) { 
    $pages = $c['model_pages'];
    $data = $pages->findFirst($params[1]);
    return  $c['view']->render('pages/view.html.twig', ['page' => $data]);
 });

 $app->get('/admin/pages/edit/{id}', function($params) use ($c) {
    $pages = $c['model_pages'];
    $data = $pages->findFirst($params[1]);
    return  $c['view']->render('pages/edit.html.twig', ['page' => $data]);
 });

 $app->post('/admin/pages/edit/{id}', function($params) use ($c) {
    $model = $c['model_pages'];
    $model->id = $params[1];
    $model->title = filter_input(INPUT_POST, 'title');
    $model->body = filter_input(INPUT_POST, 'body');
    $model->save();
    header('location: /admin/pages/' . $params[1]);
 });

 $app->post('/admin/pages/delete/{id}', function($params) use ($c) {
    $model = $c['model_pages'];
    $model->id = $params[1];
    $model->delete();
    header('location: /admin/pages');
 });
