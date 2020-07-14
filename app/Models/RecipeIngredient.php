<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
    public function recipe(){
        return $this->belongsTo('App\Models\Recipe');
    }

    public function ingredient(){
        return $this->belongsTo('App\Models\Ingredient');
    }
}
