<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Right;

$routes->get('right', [Right::class, 'index']);
$routes->get('right', [Right::class, 'index']);
$routes->get('right', [Right::class, 'index']);
$routes->get('(:segment)', [Right::class, 'view']);

