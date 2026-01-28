<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function recettes()
    {
        return $this->belongsToMany(Recette::class, 'ingredient_recette')
                    ->withPivot('quantite')
                    ->withTimestamps();
    }
}
