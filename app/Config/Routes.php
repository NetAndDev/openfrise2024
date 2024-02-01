<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/media', 'Media::menu');
$routes->get('(:segment)', [Pages::class, 'view']);