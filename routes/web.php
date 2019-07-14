<?php

Route::get('/series', 'SeriesController@index')->name('listarSeries')->middleware('auth');
Route::get('/series/criar', 'SeriesController@create')->name('formSerie');
Route::post('/series/criar', 'SeriesController@store')->name('salvarSerie');
Route::delete('/series/{id}', 'SeriesController@destroy')->name('excluirSerie');

Route::get('/series/{serieId}/temporadas', 'TemporadasController@index');
Route::post('/series/{id}/editaNome', 'SeriesController@editaNome');
Route::get('/temporadas/{temporada}/episodios', 'EpisodiosController@index');
Route::post('/temporadas/{temporada}/episodios/assistir', 'EpisodiosController@assistir');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entrar', 'EntrarController@index');
Route::post('/entrar', 'EntrarController@entrar');

Route::get('/registrar', 'RegistroController@create');
Route::post('/registrar', 'RegistroController@store');