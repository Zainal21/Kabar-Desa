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

Route::get('/news/artikel-desa/detail/{slug}', 'HomeController@detailArtikel');

Route::get('/about/informasi-web-desa', 'HomeController@informasi');

Route::get('/about/hubungi-web-desa', 'HomeController@hubungi');

Route::get('/auth/login', 'AuthController@login');

Route::post('/auth/login', 'AuthController@proccess');

Route::get('/auth/logout', 'AuthController@logout');


// Admin Manage
Route::get('/home/admin', 'DashboardController@index');

Route::get('/home/about', 'AboutController@index');

Route::get('/home/about', 'AboutController@index');

Route::post('/home/tentang/update/{id}', 'AboutController@update');


// petugas
Route::get('/home/petugas', 'DashboardController@petugas');

Route::get('/home/petugas/list', 'UserController@getPetugas');

// alamat
Route::get('/home/provinsi', 'AlamatController@provinsi');

Route::get('/home/provinsi/list', 'AlamatController@getprovinsi');



Route::get('/home/kabupaten', 'AlamatController@kabupaten');

Route::get('/home/kabupaten/list', 'AlamatController@getkabupaten');



Route::get('/home/kecamatan', 'AlamatController@kecamatan');

Route::get('/home/kecamatan/list', 'AlamatController@getkecamatan');

// penduduk master
Route::get('/home/penduduk', 'DashboardController@penduduk');

Route::get('/home/penduduk/list', 'DashboardController@getPenduduk');

Route::get('/home/kebutuhan', 'PendudukController@kebutuhan');

Route::get('/home/kebutuhan/list', 'PendudukController@getkebutuhan');



Route::get('/home/pekerjaan', 'JobController@index');

Route::get('/home/list/pekerjaan', 'JobController@getpekerjaan');





Route::get('/aspirasi/list', 'AspirasiController@index');

Route::get('/home/konten/list', 'KontenController@getKonten');

Route::get('/konten/list', 'KontenController@index');

Route::get('/konten/add', 'KontenController@create');

Route::post('/konten/add', 'KontenController@store');



