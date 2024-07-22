<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/* Ejemplo:
$routes->get(llamada desde navbar_view, 'Controlador::llamada a la funcion');
*/
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de','Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

