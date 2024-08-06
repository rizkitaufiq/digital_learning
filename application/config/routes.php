<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Admin/Siswa/Update/(:num)'] = 'Admin/Siswa/Update/index/$1';
$route['Admin/Materi/MateriTeks/MateriBab/(:num)'] = 'Admin/Materi/MateriTeks/MateriBab/index/$1';
$route['Admin/Materi/MateriTeks/MateriBab/(:num)/(:num)'] = 'Admin/Materi/MateriTeks/MateriBab/index/$1/$1';
$route['Admin/Materi/MateriTeks/MateriBab'] = 'Admin/Materi/Materiteks/MateriBab/index';

