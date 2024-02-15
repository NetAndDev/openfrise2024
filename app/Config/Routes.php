<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

use App\Controllers\Hyphen;


$routes->get('hyphen', [Hyphen::class, 'index']);
$routes->post('/hyphen/insert', [Hyphen::class, 'insert']);
$routes->get('hyphen/(:segment)', [Hyphen::class, 'display']);