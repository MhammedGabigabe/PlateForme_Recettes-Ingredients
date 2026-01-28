<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Commentaire extends Pivot
{
    protected $table = 'commentaires';
    protected $fillable = ['profil_id','recette_id','contenu'];
}
