<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtapePreparation extends Model
{
    protected $fillable = ['recette_id', 'ordre', 'description'];
    public function recette()
    {
        return $this->belongsTo(Recette::class);
    }
}
