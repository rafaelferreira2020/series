<?php

Route::get('/series', 'SeriesController@index')->name('listarSeries');
Route::get('/series/criar', 'SeriesController@create')->name('formSerie');
Route::post('/series/criar', 'SeriesController@store')->name('salvarSerie');
Route::delete('/series/{id}', 'SeriesController@destroy')->name('excluirSerie');

Route::get('/series/{serieId}/temporadas', 'TemporadasController@index');
Route::post('/series/{id}/editaNome', 'SeriesController@editaNome');
Route::get('/temporadas/{temporada}/episodios', 'EpisodiosController@index');
Route::post('/temporadas/{temporada}/episodios/assistir', 'EpisodiosController@assistir');
