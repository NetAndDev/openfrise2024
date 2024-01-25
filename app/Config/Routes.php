<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Pages;

$routes->get('/galleries', 'Galleries::galleries');
$routes->get('(:segment)', [Pages::class, 'view']);