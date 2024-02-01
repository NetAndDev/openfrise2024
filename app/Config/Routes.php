<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\License;

$routes->get('/license', [License::class,'menu']);
$routes->get('/license', 'License::menu');
$routes->get('/license/add', [License::class,'add']);
$routes->get('/license/list', 'License::list');