<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plano extends Model
{
   // use HasFactory;

   protected $fillable = [

    'nome', 'url', 'preco', 'descricao'

   ];

   public function detalhes(){

    $this->hasMany(detalhePlano::class);
   }
}
