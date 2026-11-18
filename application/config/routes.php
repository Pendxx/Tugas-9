<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'login';
$route['admin'] = 'admin/overview';
$route['admin/products'] = 'admin/products';
$route['admin/products/add'] = 'admin/products/add';
$route['admin/products/edit/(:any)'] = 'admin/products/edit/$1';
$route['admin/products/delete/(:any)'] = 'admin/products/delete/$1';
$route['login'] = 'login';
$route['logout'] = 'login/logout';
$route['about'] = 'about';
$route['contact'] = 'contact';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
