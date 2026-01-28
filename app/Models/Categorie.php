<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function recettes()
    {
        return $this->hasMany(Recette::class);
    }
}
