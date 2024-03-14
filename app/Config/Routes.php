<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Level;

$routes->get('level', [Level::class, 'index']); 
$routes->post('level/insert',[Level::class, 'insert']);
$routes->post('level/update',[Level::class, 'update']);
$routes->get('(:segment)', [Level::class, 'view']);

