@extends('adminlte::page')

@section('title', "Editar o perfil: { $perfil->nome }")

@section('content_header')

<ol class="breadcrumb">
    <li><a class="breadcrumb-item" href="#">Dashboard</a></li>/
    <li><a class="breadcrumb-item" href="{{ route('admin.perfil.index') }}">Perfis</a></li>/
    <li><a class="breadcrumb-item" href="{{ route('admin.permissao.index') }}">Permissões</a></li>/
    <li><a class="breadcrumb-item active" href="{{ route('admin.plano.index') }}">Planos</a></li>
</ol>
    <h1>Editar Perfil: {{ $perfil->nome }}</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <form class="form" method="POST" action="{{ route('admin.perfil.atualizar', $perfil->id) }}">
            @method('PUT')
            @csrf
            @include('paginas.admin.perfis._includes.form')
            <button type="submit" class="btn btn-success">Atualizar Perfil</button>
        </form>
    </div>
</div>

@stop
