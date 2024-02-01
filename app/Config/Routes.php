<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Media;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/media', [Media::class, 'display']);
$routes->get('/media/(:segment)', [Media::class, 'display']);