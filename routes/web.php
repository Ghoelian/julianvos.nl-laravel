<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@getHome')->name('home');

Route::get('privacy-policy', 'App\Http\Controllers\HomeController@privacyPolicy')->name('privacy-policy');
Route::get('terms-of-service', 'App\Http\Controllers\HomeController@termsOfService')->name('terms-of-service');