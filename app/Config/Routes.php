<?php

use App\Controllers\Team;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('team', [Team::class,'display']);
$routes->get('team/(:segment)', [Team::class,'display']);