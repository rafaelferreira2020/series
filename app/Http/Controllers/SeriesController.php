<?php
namespace App\Http\Controllers;

use App\Serie;
use App\Temporada;
use App\Episodio;
use App\Services\{CriadorDeSerie, RemovedorDeSerie};

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

    public function store(SeriesFormRequest $request, CriadorDeSerie $criadorDeSerie){

        $serie = $criadorDeSerie->criarSerie($request->nome, $request->temporadas, $request->episodios);

        $request->session()
                ->flash('mensagem', "Série {$serie->nome} com ID {$serie->id} criada com sucesso! ");

        return redirect()->route('listarSeries');
    }

    public function destroy(Request $request, RemovedorDeSerie $removedorDeSerie){

        $nomeSerie = $removedorDeSerie->removerSerie($request->id);
        
        $request->session()
                ->flash('mensagem', "Série $nomeSerie removida com sucesso! ");
        
        return redirect()->route('listarSeries');
    }

    public function editaNome(int $id, Request $request){

        $novoNome = $request->nome;
        $serie = Serie::find($id);
        $serie->nome = $novoNome;
        $serie->save();
    }
}