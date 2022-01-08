<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\detalhePlano;
use App\Models\plano;
use Illuminate\Http\Request;

class detalhePlanoController extends Controller
{
    protected $diretorio, $plano;

    public function __construct(detalhePlano $detalhePlano, plano $plano)
    {
        $this->diretorio = $detalhePlano;
        $this->plano = $plano;
    }

    public function index($idplano){

        $plano = $this->plano->where('id', $idplano)->first();
        $detalhePlano = $plano->detalhes()->paginate(5);
        return view('paginas.admin.planos.detalhes.index', compact('plano', 'detalhePlano'));
    }

    public function criar($idplano){

        return view('paginas.admin.planos.detalhes.criar');
    }

    public function salvar($idplano){

    }

    public function mostrar($idplano){

    }

    public function editar($idplano){

    }

    public function atualizar($idplano){

    }

    public function deletar($idplano){

    }
}
