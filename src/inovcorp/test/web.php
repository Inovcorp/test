<?php

Route::group(['namespace' => 'Inovcorp\Test\Controllers'], function() {
    Route::group(["prefix" => "/backoffice"], function () {
        Route::get('/home', "HomeController@index");
    });
});
