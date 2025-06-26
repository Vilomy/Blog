<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Blog'], function() {
    Route::get('/', 'IndexController');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::group(['namespace' => 'Blog'], function() {
        Route::get('/', 'IndexController');
    });
});


Auth::routes();
