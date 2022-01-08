<?php

namespace App\Observers;

use App\Models\plano;
use Illuminate\Support\Str;

class planoObserver
{
    /**
     * Handle the plano "created" event.
     *
     * @param  \App\Models\plano  $plano
     * @return void
     */
    public function creating(plano $plano)
    {
        $plano->url = Str::kebab($plano->nome);
    }

    /**
     * Handle the plano "updated" event.
     *
     * @param  \App\Models\plano  $plano
     * @return void
     */
    public function updating(plano $plano)
    {
        $plano->url = Str::kebab($plano->nome);
    }

    }
