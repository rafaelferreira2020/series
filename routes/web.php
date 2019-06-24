<?php

Route::get('/series', 'SeriesController@index')->name('listarSeries');
Route::get('/series/criar', 'SeriesController@create')->name('formSerie');
Route::post('/series/criar', 'SeriesController@store')->name('salvarSerie');
Route::delete('/series/{id}', 'SeriesController@destroy')->name('excluirSerie');