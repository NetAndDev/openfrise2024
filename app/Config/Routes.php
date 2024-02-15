
<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\License;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/license', [License::class, 'menu']);
$routes->post( '/License/insert',[License::class, 'insert']);
$routes->get('/license/(:segment)', [License::class, 'display']);