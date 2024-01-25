<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/team', 'Team::index');
$routes->get('/team/add', 'Team::add');
$routes->get('/team/liste', 'Team::liste');