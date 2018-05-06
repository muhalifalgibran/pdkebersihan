<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'autentikasi/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['marketing-daftar'] = 'marketing/Marketing/daftar';
$route['marketing-dashboard'] = 'marketing/Marketing/dashboard';
$route['marketing-input_penawaran'] = 'marketing/Marketing/kirimPenawaran';
$route['marketing-daftar_penawaran'] = 'marketing/Marketing/daftarPenawaran';
$route['pelanggan-dashboard'] = 'pelanggan/Pelanggan/dashboard';
$route['pelanggan-inbox'] = 'pelanggan/Pelanggan/inbox';
$route['pelanggan-profil'] = 'pelanggan/Pelanggan/profil';
$route['pegawai'] = 'marketing/Marketing';
$route['pelanggan-pesan_layanan'] = 'pelanggan/Pelanggan/pesanLayanan';
$route['super-dashboard'] = 'Super_admin/dashboard';
$route['super-regis'] = 'Super_admin/registrasi';
$route['penguji-dashboard'] = 'penguji/Penguji/Dashboard';
$route['penguji-penawaran'] = 'penguji/Penguji/penawaran';
$route['penguji-daftar_penawaran'] = 'penguji/Penguji/daftarPenawaran';
$route['kasie-dashboard'] = 'kasiePelsus/KasiePelsus/dashboard';
$route['kasie-mingguan'] = 'kasiePelsus/KasiePelsus/laporanMingguan';
$route['kasie-bulanan'] = 'kasiePelsus/KasiePelsus/laporanBulanan';



