<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Media;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/media', [Media::class, 'display']);
$routes->post('/media/insert', [Media::class, 'insert']);
$routes->post('/media/update', [Media::class, 'update']);
$routes->post('/media/delete', [Media::class, 'delete']);
$routes->get('/media/(:segment)', [Media::class, 'display']);