<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Home::index');

use App\Controllers\Timeline;

$routes->get('timeline', 'Timeline::display');
$routes->get('timeline/(:segment)', [Timeline::class, 'display']);   