<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\salvaAtualizaPlano;
use App\Models\plano;
use Illuminate\Http\Request;

class planoController extends Controller
{
    private $acesso;

    public function __construct(plano $plano)
    {
        $this->acesso = $plano;
    }

    public function index(){

        $plano = $this->acesso->paginate(5);
        return view('paginas.admin.planos.index', compact('plano'));
    }

    public function criar(){

        return view('paginas.admin.planos.criar');
    }

    public function salvar(salvaAtualizaPlano $request){

        $plano = $this->acesso->create($request->all());
        return redirect()->route('admin.plano.index');
    }

    public function mostrar($id){

        $plano = $this->acesso->find($id);
        return view('paginas.admin.planos.mostrar', compact('plano'));
    }

    public function editar($id){

        $plano = $this->acesso->find($id);
        return view('paginas.admin.planos.editar', compact('plano'));
    }

    public function atualizar(salvaAtualizaPlano $request, $id){

        $plano = $this->acesso->find($id);
        $plano->update($request->all());
        return redirect()->route('admin.plano.index');
    }

    public function deletar($id){

        $plano = $this->acesso->find($id);
        $plano->delete();
        return redirect()->route('admin.plano.index');
    }
}
