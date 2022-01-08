@extends('adminlte::page')

@section('title', "detalhes do Plano: $plano->nome")

@section('content_header')
<ol class="breadcrumb">
    <li><a class="breadcrumb-item" href="#">Dashboard</a></li>/
    <li><a class="breadcrumb-item" href="{{ route('admin.perfil.index') }}">Perfis</a></li>/
    <li><a class="breadcrumb-item" href="{{ route('admin.permissao.index') }}">Permissões</a></li>/
    <li><a class="breadcrumb-item active" href="{{ route('admin.plano.index') }}">Planos</a></li>
</ol>

    <h1>Detalhes do Plano: {{ $plano->nome }}</h1>

@stop

@section('content')

    <div class="card">
        <div class="card-body">

                Nome:
                <br>
                <strong>{{ $plano->nome }}</strong>
                <br><br>
                URL:
                <br>
                <strong>{{ $plano->url }}</strong>
                <br><br>
                Valor:
                <br>
                <strong>{{ $plano->preco }}</strong>
                <br><br>
                Descrição:
                <br>
                <strong>{{ $plano->descricao }}</strong>
        </div>
        <div class="card-footer">
            <form class="form" method="POST" action="{{ route('admin.plano.deletar', $plano->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Apagar o plano {{ $plano->nome }}</button>
            </form>
        </div>
    </div>

@stop
