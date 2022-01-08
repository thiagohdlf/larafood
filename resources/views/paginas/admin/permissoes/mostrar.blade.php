@extends('adminlte::page')

@section('title', "detalhes da Permissão: $permissao->nome")

@section('content_header')
<ol class="breadcrumb">
    <li><a class="breadcrumb-item" href="#">Dashboard</a></li>/
    <li><a class="breadcrumb-item" href="{{ route('admin.perfil.index') }}">Perfis</a></li>/
    <li><a class="breadcrumb-item" href="{{ route('admin.permissao.index') }}">Permissões</a></li>/
    <li><a class="breadcrumb-item active" href="{{ route('admin.plano.index') }}">Planos</a></li>
</ol>

    <h1>Detalhes da Permissão: {{ $permissao->nome }}</h1>

@stop

@section('content')

    <div class="card">
        <div class="card-body">

                Nome:
                <br>
                <strong>{{ $permissao->nome }}</strong>
                <br><br>
                Descrição:
                <br>
                <strong>{{ $permissao->descricao }}</strong>
        </div>
        <div class="card-footer">
            <form class="form" method="POST" action="{{ route('admin.permissao.deletar', $permissao->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Apagar a permissão {{ $permissao->nome }}</button>
            </form>
        </div>
    </div>

@stop
