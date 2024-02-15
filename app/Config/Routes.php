<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Level;

$routes->get('level', [Level::class, 'index']); 
$routes->get('(:segment)', [Level::class, 'view']);

