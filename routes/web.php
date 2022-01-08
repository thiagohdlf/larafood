<?php

use App\Http\Controllers\Admin\detalhePlanoController;
use App\Http\Controllers\Admin\perfilController;
use App\Http\Controllers\Admin\permissaoController;
use App\Http\Controllers\Admin\permissaoPerfilController;
use App\Http\Controllers\Admin\planoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){

            /**Rotas admin permissões X perfis */

    Route::get('/perfil/{idPerfil}/permissao', [permissaoPerfilController::class, 'index'])->name('perfil.permissao');
    Route::get('/perfil/{idPerfil}/permissao/{idPermissao}/retirar', [permissaoPerfilController::class, ''])->name('perfil.permissao.retirar');
    Route::any('/perfil/{idPerfil}/permissao/criar', [permissaoPerfilController::class, 'criar'])->name('admin.perfil.permissao.adicionar');

            /** */

            /**Rotas admin Perfil */
    Route::get('/perfil', [perfilController::class, 'index'])->name('perfil.index');
    Route::get('/perfil/criar', [perfilController::class, 'criar'])->name('perfil.criar');
    Route::post('/perfil/salvar', [perfilController::class, 'salvar'])->name('perfil.salvar');
    Route::get('/perfil/mostrar/{id}', [perfilController::class, 'mostrar'])->name('perfil.mostrar');
    Route::get('/perfil/editar/{id}', [perfilController::class, 'editar'])->name('perfil.editar');
    Route::put('/perfil/atualizar/{id}', [perfilController::class, 'atualizar'])->name('perfil.atualizar');
    Route::delete('/perfil/deletar/{id}', [perfilController::class, 'deletar'])->name('perfil.deletar');
    //Route::get('/perfil/pesquisar/{id}', [perfilController::class, 'pesquisar'])->name('perfil.pesquisar');
            /** */

            /**Rotas admin permissão */
    Route::get('/permissao', [permissaoController::class, 'index'])->name('permissao.index');
    Route::get('/permissao/criar', [permissaoController::class, 'criar'])->name('permissao.criar');
    Route::post('/permissao/salvar', [permissaoController::class, 'salvar'])->name('permissao.salvar');
    Route::get('/permissao/mostrar/{id}', [permissaoController::class, 'mostrar'])->name('permissao.mostrar');
    Route::get('/permissao/editar/{id}', [permissaoController::class, 'editar'])->name('permissao.editar');
    Route::put('/permissao/atualizar/{id}', [permissaoController::class, 'atualizar'])->name('permissao.atualizar');
    Route::delete('/permissao/deletar/{id}', [permissaoController::class, 'deletar'])->name('permissao.deletar');
    //Route::get('/permissao/pesquisar', [permissaoController::class, 'pesquisar'])->name('permissao.pesquisar');
        /** */

        /**Rotas admin Detalhes plano */
    Route::get('/plano/{idplano}/detalhes', [detalhePlanoController::class, 'index'])->name('detalhe.plano.index');
    Route::get('/plano/{idplano}/detalhes/criar', [detalhePlanoController::class, 'criar'])->name('detalhe.plano.criar');
    Route::post('/plano/{idplano}/detalhes', [detalhePlanoController::class, 'salvar'])->name('detalhe.plano.salvar');
    Route::get('/plano/{idplano}/detalhes/{iddetalhe}', [detalhePlanoController::class, 'mostrar'])->name('detalhe.plano.mostrar');
    Route::get('/plano/{idplano}/detalhes/{iddetalhe}/editar', [detalhePlanoController::class, 'editar'])->name('detalhe.plano.editar');
    Route::put('/plano/{idplano}/detalhes{iddetalhe}', [detalhePlanoController::class, 'atualizar'])->name('detalhe.plano.atualizar');
    Route::delete('/plano/{idplano}/detalhes/{iddetalhe}', [detalhePlanoController::class, 'deletar'])->name('detalhe.plano.deletar');
        /** */

        /**Rotas admin plano */
    Route::get('/plano', [planoController::class, 'index'])->name('plano.index');
    Route::get('/plano/criar', [planoController::class, 'criar'])->name('plano.criar');
    Route::post('/plano/salvar', [planoController::class, 'salvar'])->name('plano.salvar');
    Route::get('/plano/mostrar/{id}', [planoController::class, 'mostrar'])->name('plano.mostrar');
    Route::get('/plano/editar/{id}', [planoController::class, 'editar'])->name('plano.editar');
    Route::put('/plano/atualizar/{id}', [planoController::class, 'atualizar'])->name('plano.atualizar');
    Route::delete('/plano/deletar/{id}', [planoController::class, 'deletar'])->name('plano.deletar');
    //Route::get('/plano/pesquisar', [planoController::class, 'pesquisar'])->name('plano.pesquisar');
        /** */


});
