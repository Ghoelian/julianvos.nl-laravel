<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@getHome')->name('home');
Route::get('home', 'App\Http\Controllers\HomeController@getHome')->name('home');
Route::get('about', 'App\Http\Controllers\HomeController@getHome')->name('about');
Route::get('portfolio', 'App\Http\Controllers\HomeController@getHome')->name('portfolio');
Route::get('experience', 'App\Http\Controllers\HomeController@getHome')->name('experience');
Route::get('contact', 'App\Http\Controllers\HomeController@getHome')->name('contact');

Route::post('recaptcha', 'App\Http\Controllers\HomeController@verifyRecaptcha')->name('recaptcha');

Route::get('privacy-policy', 'App\Http\Controllers\HomeController@privacyPolicy')->name('privacy-policy');
Route::get('terms-of-service', 'App\Http\Controllers\HomeController@termsOfService')->name('terms-of-service');

Route::get('projects', 'App\Http\Controllers\ProjectsController@getProjects')->name('projects');