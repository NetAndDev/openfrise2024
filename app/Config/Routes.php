<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/hyphen', 'Hyphen::index');
$routes->get('/hyphen/add', 'Hyphen::add');
$routes->get('/hyphen/liste', 'Hyphen::liste');
