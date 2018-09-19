<?php

$app->get('/admin/users', function($params) use ($c) {
    $users = $c['model_users'];
    $data = $users->findAll();
    return  $c['view']->render('users/index.html.twig', ['users' => $data]);
 });
 
 $app->get('/admin/users/new', function($params) use ($c) {
    return  $c['view']->render('users/new.html.twig');
 });

 $app->post('/admin/users/new', function($params) use ($c) {
    $password = filter_input(INPUT_POST, 'password');

    if (!$password) {
        header('location: /admin/users/new');
    }

    $password = password_hash($password, PASSWORD_DEFAULT, [
        'cost' => 12
    ]);

    $model = $c['model_users'];
    $model->name = filter_input(INPUT_POST, 'name');
    $model->email = filter_input(INPUT_POST, 'email');
    $model->password = $password;
    $model->save();
    header('location: /admin/users');
 });

 $app->get('/admin/users/{id}', function($params) use ($c) { 
    $users = $c['model_users'];
    $data = $users->findFirst($params[1]);
    return  $c['view']->render('users/view.html.twig', ['user' => $data]);
 });

 $app->get('/admin/users/edit/{id}', function($params) use ($c) {
    $users = $c['model_users'];
    $data = $users->findFirst($params[1]);
    return  $c['view']->render('users/edit.html.twig', ['user' => $data]);
 });

 $app->post('/admin/users/edit/{id}', function($params) use ($c) {
    $password = filter_input(INPUT_POST, 'password');

    $model = $c['model_users'];
    $model->id = $params[1];
    $model->name = filter_input(INPUT_POST, 'name');
    $model->email = filter_input(INPUT_POST, 'email');

    if ($password) {
        $password = password_hash($password, PASSWORD_DEFAULT, [
            'cost' => 12
        ]);
        $model->password = $password;
    } else {
        $data = $users->findFirst($params[1]);
        $model->password = $data['password'];
    }
    
    $model->save();
    header('location: /admin/users/' . $params[1]);
 });

 $app->post('/admin/users/delete/{id}', function($params) use ($c) {
    $model = $c['model_users'];
    $model->id = $params[1];
    $model->delete();
    header('location: /admin/users');
 });
