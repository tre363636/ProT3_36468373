<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/* Ejemplo:
$routes->get('ruta', 'Controlador::funcion');
*/
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

/* Rutas del Registro de Usuarios */
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

/* Rutas del login */
$routes->get('/login', 'login_controller::index'); // Asegúrate de que el método index esté definido en login_controller
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');

/* Rutas de edit y eliminar */
$routes->get('usuario/delete/(:num)', 'usuario_controller::delete/$1');
$routes->get('usuario/edit/(:num)', 'usuario_controller::edit/$1');
$routes->post('usuario/update/(:num)', 'usuario_controller::update/$1');


if (is_file(APPPATH . 'config/' . ENVIRONMENT . 'Routes.php')) {
    require APPPATH . 'config/' . ENVIRONMENT . 'Routes.php';
}
