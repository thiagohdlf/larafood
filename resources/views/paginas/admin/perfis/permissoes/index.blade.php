@extends('adminlte::page')

@section('title', "Permissões do Perfil: $perfil->nome")

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.perfil.index') }}">Perfis</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.permissao.index') }}">Permissões</a></li>
    <li class="breadcrumb-item active"><a class="active" href="{{ route('admin.plano.index') }}">Planos</a></li>
</ol>
    <h1>Permissões do Perfil: <strong>{{ $perfil->nome }}</strong></h1>
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
                @foreach ($permissoes as $permissao)
                    <tr>
                        <td>{{ $permissao->nome }}</td>
                        <td>
                            <a href="#" class="btn btn-danger">Retirar Permissão</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a class="btn btn-info" href="#">Adicionar Permissão</a>
    </div>
    {{ $permissoes->links() }}
</div>
@stop
