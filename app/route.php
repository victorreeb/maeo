<?php
/*
	Routes
	controller needs to be registered in dependency.php
*/

$app->get('/', 'App\Controllers\HomeController:dispatch')->setName('homepage');

$app->get('/home', 'App\Controllers\HomeController:dispatch')->setName('homepage');

$app->get('/login', 'App\Controllers\LoginController:dispatch')->setName('login');

$app->post('/login', 'App\Controllers\LoginController:login')->setName('login');

$app->get('/signup', 'App\Controllers\SignupController:dispatch')->setName('signup');

$app->post('/signup', 'App\Controllers\SignupController:signup')->setName('signup');