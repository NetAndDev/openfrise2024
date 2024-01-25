<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/right', 'Right::menu');
$routes->get('/right/add', 'Right::add');
$routes->get('/right/list', 'Right::list');