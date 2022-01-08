@include('paginas._includes.alertas')
<div class="form-group">
    <label>Nome:</label>
    <input class="form-control" name="nome" type="text" placeholder="Nome:" value="{{$plano->nome ?? old('nome')}}">
</div>
<div class="form-group">
    <label>Valor:</label>
    <input class="form-control" name="preco" type="text" placeholder="Valor:" value="{{$plano->preco ?? old('preco')}}">
</div>
<div class="form-group">
    <label>Descrição:</label>
    <input class="form-control" name="descricao" type="text" placeholder="Descrição:" value="{{$plano->descricao ?? old('descricao')}}">
</div>
