<?php

namespace App\Http\Controllers;
use App\Serie;

use Illuminate\Http\Request;

class TemporadasController extends Controller{

    public function index(int $serieId){

        $serie = Serie::find($serieId);
        $temporadas = $serie->temporadas;
        // $temporadas = Temporada::query()->where('serie_id', $serieId)->orderBy('numero')->get();


        return view('temporadas.index', compact('serie', 'temporadas'));
    }
}
