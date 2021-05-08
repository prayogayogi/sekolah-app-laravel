<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index')->name('root');
Route::group(['middleware' => ['guest']], function () {
  /* untuk view login */
  Route::get('/auth/login', 'AuthController@loginAuth')->name('login');

  /*Untuk Dashboard Apk */
  Route::get('/dashboard/about', 'DashboardController@about')->name('about');
  Route::get('/dashboard/teacher', 'DashboardController@teacher')->name('teacher');
  Route::get('/dashboard/berita', 'DashboardController@berita')->name('berita');
  Route::get('/dashboard/kegiatan', 'DashboardController@kegiatan')->name('kegiatan');
  Route::get('/dashboard/kontak', 'DashboardController@kontak')->name('kontak');
});

// Untuk Admin
Route::middleware('auth')->group(function () {
  // Dashboard App Di Master Admin
  Route::get('/admin/dashboard', 'AdminController@index')->name('dashboard');

  // Untuk Kepala Sekolah
  Route::get('/admin/kepalaSekolah', 'KepalaSekolahController@index')->name('kepalaSekolah');
  Route::post('/admin/kepalaSekolah', 'KepalaSekolahController@store')->name('tambahKepalaSekolah');
  Route::delete('/admin/{headmaster}/kepalaSekolah/', 'KepalaSekolahController@destroy')->name('deleteKepalaSekolah');
  Route::put('/admin/{headmaster}/kepalaSekolah/', 'KepalaSekolahController@update')->name('editKepalaSekolah');
  Route::get('/admin/{headmaster}/kepalaSekolah/', 'KepalaSekolahController@show')->name('showKepalaSekolah');

  Route::get('/admin/guruPns', 'GuruPnsController@index')->name('guruPns');
  Route::post('/admin/guruPns', 'GuruPnsController@store')->name('tambahGuruPns');
  Route::put('/admin/{teacher}/guruPns', 'GuruPnsController@update')->name('ubahGuruPns');
  Route::get('/admin/guruHonorer', 'GuruHonorController@index')->name('guruHonorer');
  Route::post('/admin/guruHonorer', 'GuruHonorController@store')->name('tambahGuruHonor');
});


// untuk siapa saja untuk User Login
Route::get('/userLogin', 'authController@userLogin')->name('userLogin');

// Untuk Autentifikasi

/*Untuk aksi Login*/
Route::post('/auth/dashboard', 'AuthController@dashboard')->name('dashboardLogin');

/*untuk Logout*/
Route::post('/auth/logOut', 'Auth\LogoutController')->name('logOut');
