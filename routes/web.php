<?php

Route::get('/series', 'SeriesController@index')->name('listarSeries');
Route::get('/series/criar', 'SeriesController@create')->name('formSerie')->middleware('autenticador');
Route::post('/series/criar', 'SeriesController@store')->name('salvarSerie')->middleware('autenticador');
Route::delete('/series/{id}', 'SeriesController@destroy')->name('excluirSerie')->middleware('autenticador');

Route::get('/series/{serieId}/temporadas', 'TemporadasController@index');
Route::post('/series/{id}/editaNome', 'SeriesController@editaNome')->middleware('autenticador');

Route::get('/temporadas/{temporada}/episodios', 'EpisodiosController@index');
Route::post('/temporadas/{temporada}/episodios/assistir', 'EpisodiosController@assistir')->middleware('autenticador');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entrar', 'EntrarController@index');
Route::post('/entrar', 'EntrarController@entrar');

Route::get('/registrar', 'RegistroController@create');
Route::post('/registrar', 'RegistroController@store');

Route::get('/sair', function () {
    Auth::logout();
    return redirect('/entrar');
});