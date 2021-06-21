<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;


Route::get('/', 'ViewDashboardController@index')->name('home');
Route::prefix('dashboard')->group(function () {
  Route::get('about', 'ViewDashboardController@about')->name('view-about');
  Route::get('teacher', 'ViewDashboardController@teacher')->name('view-teacher');
  Route::get('teacher', 'ViewDashboardController@teacher')->name('view-teacher');
});
