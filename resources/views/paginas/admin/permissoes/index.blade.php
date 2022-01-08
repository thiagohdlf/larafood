@extends('adminlte::page')

@section('title', "Permissão")

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.perfil.index') }}">Perfis</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.permissao.index') }}">Permissões</a></li>
    <li class="breadcrumb-item active"><a class="active" href="{{ route('admin.plano.index') }}">Planos</a></li>
</ol>
    <h1>Lista de Permissões</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        Pesquisar
    </div>
    <div class="card-body">
        <table class="table table-info">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissao as $p)
                    <tr>
                        <td>{{ $p->nome }}</td>
                        <td>
                            <a href="{{ route('admin.permissao.mostrar', $p->id) }}" class="btn btn-dark">Ver detalhes</a>
                            <a href="{{ route('admin.permissao.editar', $p->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a class="btn btn-info" href="{{ route('admin.permissao.criar') }}">Cadastrar permissão</a>
    </div>
</div>
@stop
