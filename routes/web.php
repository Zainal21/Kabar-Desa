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




// ajax get data 

Route::group(['prefix' => '/home'], function(){
  Route::get('/konten/list', 'KontenController@getKonten');
  Route::get('/petugas/list', 'UserController@getPetugas');
  Route::get('/provinsi/list', 'AlamatController@getprovinsi');
  Route::get('/penduduk/list', 'DashboardController@getPenduduk');
  Route::get('/kebutuhan/list', 'PendudukController@getkebutuhan');
  Route::get('/kabupaten/list', 'AlamatController@getkabupaten');
  Route::get('/list/pekerjaan', 'JobController@getpekerjaan');

});

// site website
  Route::get('/', 'HomeController@index');
  Route::get('/en/Data-Kebutuhan-desa', 'HomeController@kebutuhan');
  Route::get('/en/Data-Pekerjaan-desa', 'HomeController@pekerjaan');
  Route::get('/en/Data-umkm-desa', 'HomeController@umkm');
  Route::get('/en/Data-penduduk-desa', 'HomeController@penduduk');
  Route::get('/news/kabar-desa', 'HomeController@kabardesa');
  Route::get('/news/artikel-desa/detail/{slug}', 'HomeController@detailkabar');
  Route::get('/news/artikel-desa', 'HomeController@artikel');
  Route::get('/about/informasi-web-desa', 'HomeController@informasi');
  Route::get('/about/hubungi-web-desa', 'HomeController@hubungi');
  Route::get('/auth/login', 'AuthController@login')->name('login');
  Route::post('/auth/login', 'AuthController@proccess');
  Route::get('/auth/logout', 'AuthController@logout');



Route::group(['prefix' => '/home'], function(){
  Route::group(['middleware' => 'auth'], function(){
    // Admin Manage
    Route::get('/admin', 'DashboardController@index');
    Route::get('/about', 'AboutController@index');
    Route::get('/about', 'AboutController@index');
    Route::post('/tentang/update/{id}', 'AboutController@update');
    // petugas
    Route::get('/petugas', 'DashboardController@petugas');
    Route::post('/petugas/add', 'UserController@store');
    Route::get('/petugas/delete/{id}', 'UserController@destroy');
    // alamat
    Route::get('/provinsi', 'AlamatController@provinsi');
    Route::post('/provinsi', 'AlamatController@provinsistore');
    Route::get('/provinsi/edit/{id}', 'AlamatController@provinsiedit');
    Route::post('/provinsi/update/{id}', 'AlamatController@provinsiupdate');
    Route::get('/provinsi/delete/{id}', 'AlamatController@provinsidestroy');
    // kabupaten
    Route::get('/kabupaten', 'AlamatController@kabupaten');
    Route::post('/kabupaten/add', 'AlamatController@kabupatenstore');
    Route::get('/kabupaten/delete/{id}', 'AlamatController@kabupatendelete');
    Route::get('/kabupaten/edit/{id}', 'AlamatController@kabupatenedit');
    Route::post('/kabupaten/update/{id}', 'AlamatController@kabupatenupdate');
    // penduduk master
    Route::get('/kebutuhan', 'PendudukController@kebutuhan');
    Route::post('/kebutuhan/add', 'PendudukController@savekebutuhan');
    Route::get('/kebutuhan/delete/{id}', 'PendudukController@deletekebutuhan');
    Route::get('/pekerjaan', 'JobController@index');
    Route::post('/pekerjaan/add', 'JobController@store');
    Route::get('/pekerjaan/delete/{id}', 'JobController@destroy');
    Route::get('/penduduk', 'DashboardController@penduduk');
    Route::get('/penduduk/add', 'DashboardController@creatependuduk');
    // aspirasip
    Route::get('/aspirasi/list', 'AspirasiController@index');
  });

});

Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => '/konten'], function(){
      Route::get('/list', 'KontenController@index');
      Route::get('/add', 'KontenController@create');
      Route::post('/add', 'KontenController@store');
      Route::get('/edit/{id}', 'KontenController@edit');
      Route::post('/update/{id}', 'KontenController@update');
      Route::get('/delete/{id}', 'KontenController@destroy');
  });
});


  
  