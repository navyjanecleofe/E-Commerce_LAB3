<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AdminController::login');
$routes->get('/register', 'AdminController::register');
$routes->post('/authreg', 'AdminController::authreg');
$routes->post('/authlog', 'AdminController::authlogin');
$routes->get('/home', 'UserController::home');
$routes->get('/cart', 'UserController::cart');
$routes->get('/checkout', 'UserController::checkout');
$routes->get('/dash', 'UserController::dash');

$routes->get('products', 'ProductController::index');
$routes->get('products/create', 'ProductController::create');
$routes->post('products', 'ProductController::store');
$routes->get('products/edit/(:num)', 'ProductController::edit/$1');
$routes->post('products/update', 'ProductController::update');
$routes->get('products/delete/(:num)', 'ProductController::delete/$1');
