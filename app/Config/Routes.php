<?php



use App\Controllers\Type_media;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('type_media', [Type_media::class, 'display']);
$routes->get('type_media/(:segment)', [Type_media::class, 'display']);


//$routes->get('/type_media', 'Type_media::index');
//$routes->get('/type_media/add', 'Type_media::add');
//$routes->get('/type_media/liste', 'Type_media::liste');
