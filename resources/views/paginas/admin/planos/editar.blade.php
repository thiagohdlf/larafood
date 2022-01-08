@extends('adminlte::page')

@section('title', "Editar o plano: { $plano->nome }")

@section('content_header')

<ol class="breadcrumb">
    <li><a class="breadcrumb-item" href="#">Dashboard</a></li>/
    <li><a class="breadcrumb-item" href="{{ route('admin.perfil.index') }}">Perfis</a></li>/
    <li><a class="breadcrumb-item" href="{{ route('admin.permissao.index') }}">Permissões</a></li>/
    <li><a class="breadcrumb-item active" href="{{ route('admin.plano.index') }}">Planos</a></li>
</ol>

    <h1>Editar Plano: {{ $plano->nome }}</h1>

@stop

@section('content')

<div class="card">
    <div class="card-body">
        <form class="form" method="POST" action="{{ route('admin.plano.atualizar', $plano->id) }}">
            @method('PUT')
            @csrf
            @include('paginas.admin.planos._includes.form')
            <button type="submit" class="btn btn-success">Atualizar Plano</button>
        </form>
    </div>
</div>

@stop
