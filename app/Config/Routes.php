<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/type_media', 'Type_media::index');
$routes->get('/type_media/add', 'Type_media::add');
$routes->get('/type_media/liste', 'Type_media::liste');
