<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

use App\Controllers\Timeline;

$routes->get('timeline', [Timeline::class, 'index']);
$routes->post('timeline/insert', [Timeline::class, 'insert']);
$routes->get('timeline/(:segment)', [Timeline::class, 'display']);   