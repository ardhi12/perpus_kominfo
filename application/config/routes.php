<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Mycon_login';
$route['404_override'] = 'Mycon_error';
$route['error_page'] = 'Mycon_error/index';
$route['translate_uri_dashes'] = FALSE;

$route['cek_login'] = 'Mycon_login/cek_login';
$route['logout'] = 'Mycon_login/logout';

$route['beranda'] = 'Mycon/beranda';
$route['anggota'] = 'Mycon/anggota';
$route['pustakawan'] = 'Mycon/pustakawan';
$route['buku'] = 'Mycon/buku';
$route['transaksi'] = 'Mycon/transaksi';
$route['pengguna'] = 'Mycon/pengguna';
$route['detail_transaksi'] = 'Mycon/detail_transaksi';
$route['laporan'] = 'Mycon/laporan';

$route['add'] = 'Mycon/add';
$route['edit'] = 'Mycon/edit';
$route['hapus'] = 'Mycon/hapus';

$route['det_anggota'] = 'Mycon/det_anggota';
$route['det_pustakawan'] = 'Mycon/det_pustakawan';
$route['det_buku'] = 'Mycon/det_buku';
$route['det_transaksi'] = 'Mycon/det_transaksi';
$route['det_pengguna'] = 'Mycon/det_pengguna';
$route['modal_hapus_anggota'] = 'Mycon/modal_hapus_anggota';






