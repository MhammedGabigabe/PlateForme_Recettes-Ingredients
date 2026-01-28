<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
   
    // protected $fillable = [
    //     'user_id',
    //     'photo',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function recettes()
    {
        return $this->hasMany(Recette::class);
    }

    public function commentaires()
    {
        return $this->belongsToMany(Recette::class, 'commentaires')
                    ->withPivot('contenu')
                    ->withTimestamps();
    }
}
