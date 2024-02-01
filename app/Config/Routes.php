<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Right;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
/*$routes->get('/right', 'Right::menu');
$routes->get('/right/add', 'Right::add');
$routes->get('/right/list', 'Right::list');*/


$routes->get('right', [Right::class, 'display']);
$routes->get('right/(:segment)', [Right::class, 'display']);

