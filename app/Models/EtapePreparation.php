<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtapePreparation extends Model
{
    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }
}
