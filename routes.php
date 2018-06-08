<?php

$router->map('GET', '/', 'Acme\Controllers\PageController@getShowHomePage', 'home');
$router->map('GET', '/register', 'Acme\Controllers\UserController@getShowRegisterPage', 'register');
$router->map('GET', '/login', 'Acme\Controllers\UserController@getShowLoginPage', 'login');