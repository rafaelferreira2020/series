@extends('layout')

@section('cabecalho')
Séries
@endsection
        
@section('conteudo')

@include('erros', ['errors' => $errors])

    <form method="post">
        @csrf
        <div class="row">
            <div class="col col-8">
                <label for="nome">Título da série:</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="col col-2">
                <label for="temporadas">Temporadas:</label>
                <input type="number" class="form-control" name="temporadas" id="temporadas">
            </div>
            <div class="col col-2">
                <label for="episodios">Episódios:</label>
                <input type="number" class="form-control" name="episodios" id="episodios">
            </div>
        </div>
        
        <button class="btn btn-dark mt-2">Adicionar Serie</button>
    </form >
@endsection