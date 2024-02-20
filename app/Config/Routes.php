<?php

use App\Controllers\Event;
use App\Controllers\Form;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('event', [Event::class, 'display']);
$routes->post('event/insert', [Event::class, 'insert']);
$routes->get('event/(:segment)', [Event::class, 'display']);