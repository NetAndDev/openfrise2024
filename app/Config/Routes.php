<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/type-media', 'Type_media::index');
$routes->get('/type-media/add', 'Type_media::add');
$routes->get('/type-media/liste', 'Type_media::liste');
