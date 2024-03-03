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
// sûrement un conflie de nom donc utiliser une page "save"
// qui utilise la méthode save au lieu de séparer update et insert 
// $outes->post('event/update', [Event::class, 'update']);
$routes->get('event/(:segment)', [Event::class, 'display']);