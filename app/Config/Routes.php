<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Team;

// /**
//  * @var RouteCollection $routes
//  */
$routes->get('/', [Home::class, 'index']);
$routes->get('team', [Team::class,'display']);
$routes->post('team/insert', [Team::class,'insert']);
$routes->post('team/update', [Team::class,'update']);
$routes->post('team/delete', [Team::class,'delete']);
$routes->get('team/(:segment)', [Team::class,'display']);