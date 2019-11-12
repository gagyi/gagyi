<?php

use Gagyi\Routes\Router;

Router::get('', 'MainController/index')->middleware('Auth');
/**
 * Routes for Auth
 */
Router::get('/login', 'AuthController/login')->name('login');
Router::post('/login', 'AuthController/logincontinue');
Router::get('/register', 'AuthController/register');
Router::get('/logout', 'AuthController/logout');
