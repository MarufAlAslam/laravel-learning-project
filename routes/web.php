<?php

use Illuminate\Support\Facades\Route;

Route::get("/name/{firstName}/{middleName}/{lastName}", 'App\Http\Controllers\DemoController@MyName');
