<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

/* Sign In / Login */
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/login_submit', 'Auth::login_submit');

/* Sign Up */
$routes->get('/auth/signup', 'Auth::signup');
$routes->post('/auth/signup_submit', 'Auth::signup_submit');

/* Forgot Password */
$routes->get('/auth/forgot_password', 'Auth::forgot_password');
$routes->post('/auth/forgot_password_submit', 'Auth::forgot_password_submit');

/* DashBoard */
$routes->get('/dashboard', 'Dashboard::index');