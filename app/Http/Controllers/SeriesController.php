<?php
namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest;

class SeriesController extends Controller {

    public function index(Request $request) {
        
        $series = Serie::query()
            ->orderBy('nome')
            ->get();

        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create(){
        return view('series.create');
    }

    public function store(SeriesFormRequest $request){

        $serie = Serie::create($request->all());

        $request->session()
                ->flash('mensagem', "Série {$serie->nome} com ID {$serie->id} criada com sucesso! ");

        return redirect()->route('listarSeries');
    }

    public function destroy(Request $request){

        Serie::destroy($request->id);

        $request->session()
                ->flash('mensagem', "Série removida com sucesso! ");
        
        return redirect()->route('listarSeries');
    }
}