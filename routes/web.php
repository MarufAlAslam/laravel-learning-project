<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\SiteController@Home');
Route::get('/about', 'App\Http\Controllers\SiteController@About');
Route::get('/contact', 'App\Http\Controllers\SiteController@Contact');
