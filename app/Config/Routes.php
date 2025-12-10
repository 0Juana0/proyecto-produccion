<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Página principal → carga Home::index
$routes->get('/', 'Home::index');

// Ruta /inicio → también carga Home::index
$routes->get('inicio', 'Home::index');

// Ruta /productos → carga Productos::index
$routes->get('productos', 'Productos::index');
