<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Pages;

$routes->get('/', 'Home::index');
$routes->get('/license', 'License::menu');
$routes->get('/license/add', 'License::add');
$routes->get('/license/list', 'License::list');