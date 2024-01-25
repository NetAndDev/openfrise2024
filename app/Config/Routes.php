<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/event', 'Event::index');
$routes->get('/event/list', 'Event::list');
$routes->get('/event/add', 'Event::add');
