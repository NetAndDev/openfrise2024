<?php

use App\Controllers\Gallery;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/gallery',[Gallery::class,'display']);
$routes->get('/gallery/(:segment)',[Gallery::class,'display']);