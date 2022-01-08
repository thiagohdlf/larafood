<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\salvaAtualizaPerfil;
use Illuminate\Http\Request;
use App\Models\perfil;

class perfilController extends Controller
{
    private $permissao;

    public function __construct(perfil $perfil)
    {
        $this->permissao = $perfil;
    }

    public function index(){

        $perfil = $this->permissao->paginate(5);
        return view('paginas.admin.perfis.index', compact('perfil'));
    }

    public function criar(){

        return view('paginas.admin.perfis.criar');
    }

    public function salvar(salvaAtualizaPerfil $request){

        $perfil = $this->permissao->create($request->all());
        return redirect()->route('admin.perfil.index');
    }

    public function mostrar($id){

        $perfil = $this->permissao->find($id);
        return view('paginas.admin.perfis.mostrar', compact('perfil'));
    }

    public function editar($id){

        $perfil = $this->permissao->find($id);
        return view('paginas.admin.perfis.editar', compact('perfil'));
    }

    public function atualizar(salvaAtualizaPerfil $request, $id){

        $perfil = $this->permissao->find($id);
        $perfil->update($request->all());
        return redirect()->route('admin.perfil.index');
    }

    public function deletar($id){

        $perfil = $this->permissao->find($id);
        $perfil->delete();
        return redirect()->route('admin.perfil.index');
    }

    public function pesquisar(){

    }
}
