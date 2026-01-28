<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    public function profil()
    {
        return $this->belongsTo(Profil::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'ingredient_recette')
                    ->withPivot('quantite')
                    ->withTimestamps();
    }
    
    public function commentaires()
    {
        return $this->belongsToMany(Profil::class, 'commentaires')
                    ->withPivot('contenu')
                    ->withTimestamps();
    }
    
    public function etapes()
    {
        return $this->hasMany(EtapePreparation::class);
    }    
}
