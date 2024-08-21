<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// -----------------------------------------Admin----------------------------------------------------------
// Siswa---------------------------------------------------------------------------------------------------
$route['Admin/Siswa/Update/(:num)'] = 'Admin/Siswa/Update/index/$1';

// Materi---------------------------------------------------------------------------------------------------
$route['Admin/Materi/MateriTeks/MateriBab/(:num)'] = 'Admin/Materi/MateriTeks/MateriBab/index/$1';
$route['Admin/Materi/MateriTeks/MateriBab/(:num)/(:num)'] = 'Admin/Materi/MateriTeks/MateriBab/index/$1/$1';
$route['Admin/Materi/MateriTeks/MateriBab'] = 'Admin/Materi/Materiteks/MateriBab/index';

$route['Admin/Materi/LatihanSoal/Page/(:num)'] = 'Admin/Materi/LatihanSoal/Page/index/$1';
$route['Admin/Materi/LatihanSoal/Update/(:num)'] = 'Admin/Materi/LatihanSoal/Update/index/$1';

// Praktikum Siswa

// -----------------------------------------Siswa----------------------------------------------------------
// Materi---------------------------------------------------------------------------------------------------
$route['Siswa/Materi/Detail/(:num)'] = 'Siswa/Materi/Detail/index/$1';
$route['Siswa/Materi/Detail/(:num)'] = 'Siswa/Materi/Detail/index/$1';

// Materi Video---------------------------------------------------------------------------------------------------
$route['Siswa/MateriVideo/Detail/(:num)'] = 'Siswa/MateriVideo/Detail/index/$1';
