<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Pages;

$routes->get('/', 'Home::index');
$routes->get('/Licence', 'licence::index');
$routes->get('/Licence/add', 'licence::add');
$routes->get('/Licence/liste', 'licence::liste');