<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
}
