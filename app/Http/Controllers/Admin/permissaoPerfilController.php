<?php

namespace App\Http\Controllers\Admin;

use App\Models\permissao;
use App\Models\perfil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class permissaoPerfilController extends Controller
{

    protected $perfil, $permissao;

    public function __construct(perfil $perfil, permissao $permissao)
    {
        $this->perfil = $perfil;
        $this->permissao = $permissao;
    }

    public function index($idPerfil){

        $perfil = $this->perfil->find($idPerfil);
        if(!$perfil){
            return redirect()->back();
        }

        $permissoes = $perfil->permissoes()->paginate(5);

        return view('paginas.admin.perfis.permissoes.index', compact('perfil', 'permissoes'));
    }
}
