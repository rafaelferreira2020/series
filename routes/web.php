<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', 'SeriesController@index');
Route::get('/series/criar', 'SeriesController@create');

// Route::resource('/series', 'SeriesController');
