<?php

use App\Controllers\Team;

/**
 * @var RouteCollection $routes
 */
$routes->get('team', [Team::class,'display']);
$routes->get('team/(:segment)', [Team::class,'display']);