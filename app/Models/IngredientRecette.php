<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class IngredientRecette extends Pivot
{
    protected $table = 'ingredient_recette';
    protected $fillable = ['ingredient_id','recette_id','quantite','unite'];
}
