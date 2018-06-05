<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['pages/categoria/(:any)'] = 'pages/proyectos_by_cat_limit/$1';
$route['proyectos/categoria/(:any)'] = 'posts/proyectos_by_cat/$1'; 
$route['firma'] = 'pages/firma'; 
$route['servicios'] = 'pages/servicios'; 
$route['categorias/borrar/(:any)'] = 'categories/borrar/$1';
$route['admin/proyectos/actualizar'] = 'posts/update';
$route['admin'] = 'admin/dashboard';
$route['admin/login'] = 'admin/login';
$route['categorias'] = 'categories/index';
$route['admin/categorias/crear'] = 'categories/create';
$route['proyectos'] = 'posts/proyectos';
$route['admin/proyectos/crear'] = 'posts/create';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['(:any)'] = 'pages/view/$1'; //anything is going to route it to pages/view, by default we have home setup.
$route['admin/proyectos/(:any)'] = 'admin/view/$1';
$route['proyectos/(:any)'] = 'posts/view/$1';
$route['admin/categorias/proyectos/(:any)'] = 'categories/proyectos/$1';
$route['admin/proyectos/editar/(:any)'] = 'posts/edit/$1';
$route['admin/uploadimgs'] = 'admin/uploadimgs';
$route['admin/crear_record'] = 'posts/create_record';
$route['admin/proyectos/editar/(:any)'] = 'posts/edit_with_id/$1';
$route['admin/removeImg'] = 'admin/removeImg';
$route['admin/users'] = 'admin/users';


