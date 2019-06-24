@extends('layout')

@section('cabecalho')
Séries
@endsection
        
@section('conteudo')
       
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Título da série:</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <button class="btn btn-dark">Adicionar Serie</button>
    </form >
@endsection