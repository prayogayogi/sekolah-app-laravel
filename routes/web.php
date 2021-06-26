<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ViewDashboardController@index')->name('home');
Route::prefix('dashboard')->group(function () {
  Route::get('about', 'ViewDashboardController@about')->name('view-about');
  Route::get('teacher', 'ViewDashboardController@teacher')->name('view-teacher');
  Route::get('news', 'ViewDashboardController@news')->name('view-news');
  Route::get('event', 'ViewDashboardController@event')->name('view-event');
  Route::get('contact', 'ViewDashboardController@contact')->name('view-contact');
});


Route::prefix('admin')->namespace('Admin')->group(function () {
  Route::get('user', 'AdminController@index')->name('user');
});
