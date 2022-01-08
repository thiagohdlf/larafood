<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\salvaAtualizaPermissao;
use Illuminate\Http\Request;
use App\Models\permissao;

class permissaoController extends Controller
{
    private $perfil;

    public function __construct(permissao $permissao)
    {
        $this->perfil = $permissao;
    }

    public function index(){

        $permissao = $this->perfil->paginate(5);
        return view('paginas.admin.permissoes.index', compact('permissao'));
    }

    public function criar(){

        return view('paginas.admin.permissoes.criar');
    }

    public function salvar(salvaAtualizaPermissao $request){

        $permissao = $this->perfil->create($request->all());
        return redirect()->route('admin.permissao.index');
    }

    public function mostrar($id){

        $permissao = $this->perfil->find($id);
        return view('paginas.admin.permissoes.mostrar', compact('permissao'));
    }

    public function editar($id){

        $permissao = $this->perfil->find($id);
        return view('paginas.admin.permissoes.editar', compact('permissao'));
    }

    public function atualizar(salvaAtualizaPermissao $request, $id){

        $permissao = $this->perfil->find($id);
        $permissao->update($request->all());
        return redirect()->route('admin.permissao.index');
    }

    public function deletar($id){

        $permissao = $this->perfil->find($id);
        $permissao->delete();
        return redirect()->route('admin.permissao.index');
    }
}
