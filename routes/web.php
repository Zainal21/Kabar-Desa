<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/en/Data-Kebutuhan-desa', 'HomeController@kebutuhan');
Route::get('/en/Data-Pekerjaan-desa', 'HomeController@pekerjaan');
Route::get('/en/Data-umkm-desa', 'HomeController@umkm');
Route::get('/en/Data-penduduk-desa', 'HomeController@penduduk');

Route::get('/news/kabar-desa', 'HomeController@kabardesa');
Route::get('/news/artikel-desa', 'HomeController@artikel');

Route::get('/about/informasi-web-desa', 'HomeController@informasi');
Route::get('/about/hubungi-web-desa', 'HomeController@hubungi');

Route::get('/auth/login', 'AuthController@login');
Route::post('/auth/login', 'AuthController@proccess');
Route::get('/auth/logout', 'AuthController@logout');


// Admin Manage
Route::get('/home/admin', 'DashboardController@index');


// petugas
Route::get('/home/petugas', 'DashboardController@petugas');

// alamat
Route::get('/home/provinsi', 'AlamatController@provinsi');

Route::get('/home/kabupaten', 'AlamatController@kabupaten');

Route::get('/home/kecamatan', 'AlamatController@kecamatan');

// penduduk master
Route::get('/home/penduduk', 'DashboardController@penduduk');

Route::get('/home/kebutuhan', 'PendudukController@kebutuhan');

Route::get('/home/pekerjaan', 'JobController@index');

Route::get('/aspirasi/list', 'AspirasiController@index');



