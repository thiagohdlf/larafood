@include('paginas._includes.alertas')
<div class="form-group">
    <label>Nome:</label>
    <input class="form-control" name="nome" type="text" placeholder="Nome:" value="{{$permissao->nome ?? old('nome')}}">
</div>
<div class="form-group">
    <label>Descrição:</label>
    <input class="form-control" name="descricao" type="text" placeholder="Descrição:" value="{{$permissao->descricao ?? old('descricao')}}">
</div>
