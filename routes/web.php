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
    Route::get('/aspirasi/list', 'AspirasiController@index');
    Route::get('/aspirasi/detail-tanggapan/{slug}', 'AspirasiController@tanggapandetail');
    Route::get('/user/edit/', 'UserController@edituser');
    Route::post('/user/update/{id}', 'UserController@updateuser');
  });
  Route::group(['middleware' => ['auth','rolecheck:Petugas']], function(){
    // profile user
  
    
    
    Route::get('/admin', 'DashboardController@index');
    // report // Belum FIxs
   
    // Route::get('/report/kebutuhan', 'ReportController@kebutuhan');
    // Route::get('/report/aspirasi', 'ReportController@aspirasi');
    // aspirasi
   
  });
  Route::group(['middleware' => ['auth', 'rolecheck:Admin']], function(){
     // Admin Manage
    Route::get('/admin', 'DashboardController@index');
    Route::get('/penduduk', 'DashboardController@penduduk');
    Route::get('/penduduk/add', 'DashboardController@creatependuduk');
    Route::post('/penduduk/create', 'DashboardController@storependuduk');
    Route::get('/penduduk/delete/{id}', 'DashboardController@destroypenduduk');
    Route::get('/penduduk/edit/{id}', 'DashboardController@editpenduduk');
    Route::post('/penduduk/en/update/{id}', 'DashboardController@updatedatapenduduk');
     // petugas
     Route::get('/petugas', 'DashboardController@petugas');
     Route::post('/petugas/add', 'UserController@store');
     Route::get('/petugas/delete/{id}', 'UserController@destroy');
     Route::get('/petugas/edit/{id}', 'UserController@edit');
     Route::post('/petugas/update/{id}', 'UserController@update');
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
     Route::get('/pekerjaan', 'JobController@index');
     Route::post('/pekerjaan/add', 'JobController@store');
     Route::get('/pekerjaan/delete/{id}', 'JobController@destroy');
       // umkm
    Route::get('/umkm-desa', 'UMKMController@index');
    Route::get('/list/umkm', 'UMKMController@getumkm');
    Route::get('/umkm-desa/add', 'UMKMController@create');
    Route::post('/umkm-desa/add', 'UMKMController@store');
    Route::get('/umkm-desa/edit/{id}', 'UMKMController@edit');
    Route::post('/umkm-desa/update/{id}', 'UMKMController@update');
    Route::get('/umkm-desa/delete/{id}', 'UMKMController@destroy');
    // kebutuhan
    Route::get('/kebutuhan', 'PendudukController@kebutuhan');
    Route::post('/kebutuhan/add', 'PendudukController@savekebutuhan');
    Route::get('/kebutuhan/delete/{id}', 'PendudukController@deletekebutuhan');

  });
  Route::group(['middleware' => 'auth', 'rolecheck:Masyarakat'], function(){
    Route::get('/admin', 'DashboardController@index');
   
    Route::get('/aspirasi/buat-pengaduan', 'AspirasiController@create');
    Route::post('/aspirasi/kirim-pengaduan', 'AspirasiController@store');
    Route::get('/aspirasi/detail-pengaduan/{slug}', 'AspirasiController@show');
  });
  Route::group(['middleware' => ['auth', 'rolecheck:Admin,Petugas']], function(){
    Route::get('/about', 'AboutController@index');
    Route::post('/tentang/update/{id}', 'AboutController@update');
    Route::get('/report/aplikasi', 'ReportController@index');

    Route::get('/aspirasi/tulis-tanggapan/{slug}', 'AspirasiController@details');
    Route::post('/aspirasi/kirim-tanggapan/{slug}', 'AspirasiController@send');

  });
});
  
  
  Route::group(['middleware' => ['auth','rolecheck:Petugas,Admin']], function(){
    Route::group(['prefix' => '/konten'], function(){
      Route::get('/list', 'KontenController@index');
      Route::get('/add', 'KontenController@create');
      Route::post('/add', 'KontenController@store');
      Route::get('/edit/{id}', 'KontenController@edit');
      Route::post('/update/{id}', 'KontenController@update');
      Route::get('/delete/{id}', 'KontenController@destroy');
    });
  });

  
  
