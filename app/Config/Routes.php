<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/timeline', 'Timeline::index');
$routes->get('/timeline/add', 'Timeline::add');
$routes->get('/timeline/liste', 'Timeline::liste');