<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/media', 'Media::menu');
$routes->get('/media/media_add', 'Media::add');
$routes->get('/media/media_list', 'Media::list');