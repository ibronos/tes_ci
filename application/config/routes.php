<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['proses_logout_admin'] = 'admin/proses_logout_admin';
$route['proses_login_admin'] = 'admin/proses_login_admin';
$route['admin/update_password'] = 'admin/proses_update_password';
$route['admin/view_update_password/(:any)'] = 'admin/view_update_password/$1';
$route['admin/hapus_user/(:any)'] = 'admin/proses_hapus/$1';
$route['admin/view_hapus_user/(:any)'] = 'admin/view_hapus/$1';
$route['admin/view_detail_user/(:any)'] = 'admin/view_detail/$1';
$route['admin/update_user'] = 'admin/proses_update';
$route['admin/view_update_user/(:any)'] = 'admin/view_update/$1';
$route['admin/daftar_user'] = 'admin/proses_daftar';
$route['admin'] = 'admin';
$route['admin/(:any)'] = 'admin/view/$1';

$route['yantek/(:any)'] = 'yantek/index/$1';
$route['yantek'] = 'yantek';

$route['supervisor/(:any)'] = 'supervisor/index/$1';
$route['supervisor'] = 'supervisor';

$route['proses_login'] = 'user/proses_login';
// $route['register'] = 'user/register';

$route['default_controller'] = 'user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
