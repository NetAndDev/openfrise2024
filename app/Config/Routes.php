<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Level;

$routes->get('level', [Level::class, 'view']); 
$routes->post('level/insert',[Level::class, 'insert']);
$routes->get('level/update',[Level::class, 'update']);
$routes->get('(:segment)', [Level::class, 'view']);

