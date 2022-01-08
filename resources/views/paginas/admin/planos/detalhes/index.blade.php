@extends('adminlte::page')

@section('title', " Detalhes do Plano: $detalhe->nome")

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
                @foreach ($detalhePlano as $d)
                    <tr>
                        <td>{{ $d->nome }}</td>
                        <td>
                            <a href="{{ route('admin.plano.mostrar', [$plano->idplano, $d->id]) }}" class="btn btn-dark">Ver</a>
                            <a href="{{ route('admin.plano.editar', [$plano->idplano, $d->id]) }}" class="btn btn-warning">Editar</a>
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
