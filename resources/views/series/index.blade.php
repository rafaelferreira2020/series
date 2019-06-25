@extends('layout')

@section('cabecalho')
Séries
@endsection
        
@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success">{{ $mensagem }}</div>
@endif

<a href="{{ route('formSerie') }}" class="btn btn-dark mb-3">Adicionar</a>
    <ul class="list-group">
        @foreach($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }} 
                <form method="post" action="/series/{{ $serie->id }}"
                    onsubmit="return confirm('Deseja remover {{ addslashes($serie->nome) }} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger "><i class="fas fa-trash"></i></button>
                </form>
            </li>

        @endforeach
    </ul>
@endsection