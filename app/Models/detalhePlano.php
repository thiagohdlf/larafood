<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalhePlano extends Model
{
    //use HasFactory;

    protected $table = 'detalhes_planos';

    protected $fillable = [
        'nome',
    ];

    public function plano(){

        $this->belongsTo(plano::class);
    }
}
