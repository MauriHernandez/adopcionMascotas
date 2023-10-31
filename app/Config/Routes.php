<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


//mascota
    //metodo get para mostrar tabla de mascotas
$routes->get('/admin/mostrarMascota', 'Admin::mostrarMascota');
    //metodo get para mostrar la vista de agregar
$routes->get('/admin/agregarMascota', 'Admin::agregarMascota');
    //metodo post para agregar mascota
$routes->post('/admin/agregarMascota', 'Admin::agregarMascota');
    //metodo post para editar informacion de mascota
$routes->post('/admin/editarMascota', 'Admin::editarMascota');
    //metodo get para mostrar la vista de editar informacion de mascota
$routes->get('admin/editarMascota/(:num)','Admin::editarMascota/$1');
    //metodo get para eliminar mascota
$routes->get('/admin/deleteMascota/(:num)', 'Admin::deleteMascota/$1');
    //metodo post para actualizar informacion de mascota
$routes->post('/admin/updateMascota','Admin::updateM');
    //metodo post para insertar informacion de mascota
$routes->post('/admin/insertM', 'Admin::insertM');

//adoptador
    //metodo get para mostrar tabla de mascotas
$routes->get('/admin/mostrarAdoptador', 'Admin::mostrarAdoptador');
$routes->get('/admin/agregarAdoptador', 'Admin::agregarAdoptador');
$routes->post('/admin/agregarAdoptador', 'Admin::agregarAdoptador');
$routes->get('admin/editarAdoptador/(:num)','Admin::editarAdoptador/$1');
$routes->get('/admin/deleteAdoptador/(:num)', 'Admin::deleteAdoptador/$1');


$routes->post('/admin/updateA','Admin::updateA');
$routes->post('/admin/insertAdoptador', 'Admin::insertA');

//dieta
$routes->get('/admin/mostrarDieta', 'Admin::mostrarDieta');
$routes->get('/admin/agregarDieta', 'Admin::agregarDieta');
$routes->post('/admin/agregarDieta', 'Admin::agregarDieta');
$routes->get('admin/editarDieta/(:num)','Admin::editarDieta/$1');
$routes->get('/admin/deleteDieta/(:num)', 'Admin::deleteDieta/$1');


$routes->post('/admin/updateDieta','Admin::updateD');
$routes->post('/admin/insertDieta', 'Admin::insertD');

//raza
$routes->get('/admin/mostrarRaza', 'Admin::mostrarRaza');
$routes->get('/admin/agregarRaza', 'Admin::agregarRaza');
$routes->post('/admin/agregarRaza', 'Admin::agregarRaza');
$routes->get('admin/editarRaza/(:num)','Admin::editarRaza/$1');
$routes->get('/admin/deleteRaza/(:num)', 'Admin::deleteRaza/$1');


$routes->post('/admin/updateR','Admin::updateR');
$routes->post('/admin/insertRaza', 'Admin::insertR');


//usuario final
$routes->get('/usuario/mostrarM', 'User::mostrarM');
$routes->get('/usuario/mostrarD', 'User::mostrarD');
$routes->get('/usuario/estadisticas', 'User::estadisticas');
