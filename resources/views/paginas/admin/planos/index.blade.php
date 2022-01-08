@extends('adminlte::page')

@section('title', "Plano")

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.perfil.index') }}">Perfis</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.permissao.index') }}">Permissões</a></li>
    <li class="breadcrumb-item active"><a class="active" href="{{ route('admin.plano.index') }}">Planos</a></li>
</ol>
    <h1>Lista de Planos</h1>
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
                @foreach ($plano as $p)
                    <tr>
                        <td>{{ $p->nome }}</td>
                        <td>
                            <a href="{{ route('admin.detalhe.plano.index', $p->id) }}" class="btn btn-primary">Detalhes</a>
                            <a href="{{ route('admin.plano.mostrar', $p->id) }}" class="btn btn-dark">Ver</a>
                            <a href="{{ route('admin.plano.editar', $p->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a class="btn btn-info" href="{{ route('admin.plano.criar') }}">Cadastrar plano</a>
    </div>
</div>
@stop
