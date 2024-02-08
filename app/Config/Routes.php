<?php

use App\Controllers\Event;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('event', [Event::class, 'display']);
$routes->get('event/(:segment)', [Event::class, 'display']);