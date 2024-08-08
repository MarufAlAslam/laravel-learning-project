<?php

use Illuminate\Support\Facades\Route;

Route::get("/name/{firstName}/{middleName}/{lastName}", 'App\Http\Controllers\DemoController@MyName');

// Route::get('/account/profile','');
// Route::get('/account/login','');
// Route::get('/account/logout','');
// Route::get('/account/signup','');
// Route::get('/account/update-profile','');

// routing group
Route::group(['prefix' => 'account'], function () {
    Route::get('/profile', function () {
        return "Profile";
    });
    Route::get('/login', function () {
        return "Login";
    });
    Route::get('/logout', function () {
        return "Logout";
    });
    Route::get('/signup', function () {
        return "Signup";
    });
    Route::get('/update-profile', function () {
        return "Update Profile";
    });
});