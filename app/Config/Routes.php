<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Pages;

$routes->get('/', 'Home::index');
$routes->get('/licence', 'Licence::menu');
$routes->get('/licence/add', 'Licence::add');
$routes->get('/licence/liste', 'Licence::liste');