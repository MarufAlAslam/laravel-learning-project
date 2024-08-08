<?php

use Illuminate\Support\Facades\Route;

Route::get("/name/{nameValue}", 'App\Http\Controllers\DemoController@MyName');
