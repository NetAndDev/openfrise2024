<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
//$routes->get('/hyphen', 'Hyphen::index');
//$routes->get('/hyphen/add', 'Hyphen::add');
//$routes->get('/hyphen/list', 'Hyphen::list');

use App\Controllers\Hyphen;

$routes->get('hyphen', [Hyphen::class, 'display']);
$routes->get('hyphen/find', [Hyphen::class, 'find']);
$routes->get('hyphen/(:segment)', [Hyphen::class, 'display']);