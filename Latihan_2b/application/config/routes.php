<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'toko';
$route['detail/(:num)'] = 'toko/detail/$1';
$route['keranjang'] = 'toko/keranjang';
$route['checkout'] = 'toko/checkout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
