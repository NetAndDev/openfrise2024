
<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\License;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/license', [License::class, 'menu']);
$routes->get('/license/(:segment)', [License::class, 'display']);