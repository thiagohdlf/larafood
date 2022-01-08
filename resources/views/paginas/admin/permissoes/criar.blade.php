@extends('adminlte::page')

@section('title', "Criar Permissão")

@section('content_header')
<ol class="breadcrumb">
    <li><a class="breadcrumb-item" href="#">Dashboard</a></li>/
    <li><a class="breadcrumb-item" href="{{ route('admin.perfil.index') }}">Perfis</a></li>/
    <li><a class="breadcrumb-item" href="{{ route('admin.permissao.index') }}">Permissões</a></li>/
    <li><a class="breadcrumb-item active" href="{{ route('admin.plano.index') }}">Planos</a></li>
</ol>

    <h1>Criar nova permissão</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.permissao.salvar') }}" class="form" method="POST">
                @csrf
                @include('paginas.admin.permissoes._includes.form')
                <button type="submit" class="btn btn-success">Salvar Permissão</button>
            </form>
        </div>
    </div>
@stop
