<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function ingredients(){
        return $this->hasMany('App\Models\Ingredients');
    }

    /* 
     * List of all recipes which uses given ingredient
     */
    public function scopeHasIngredient($query, $ingredientName){
        return $query->select('recipes.*')
        ->distinct()
        ->join('recipe_ingredients', 'recipe_ingredients.recipe_id',  'recipes.id')
        ->join('ingredients', 'recipe_ingredients.ingredient_id',  'ingredients.id')
        ->where('ingredients.name', '=', $ingredientName);
    }
    
    /* 
     * List of all recipes which do not use given ingredient
     */
    public function scopeDoNotHaveIngredient($query, $ingredientName){
        return $query->select('recipes.*')
        ->whereRaw("id NOT IN ( 
                            select recipes.id from recipes inner join recipe_ingredients on recipe_ingredients.recipe_id = recipes.id inner join ingredients on recipe_ingredients.ingredient_id = ingredients.id where ingredients.name = '$ingredientName'

                        )");
    }


    /* 
     * List of all recipes which are available for lunch based on
     * available ingredient in fridge
     */
    public function scopeAvailable($query){
        
    	return $query->select(DB::raw("recipes.*, MIN(fridge_contents.best_before) as best_before "))
    	->join('recipe_ingredients', 'recipe_ingredients.recipe_id',  'recipes.id')
    	->leftJoin('fridge_contents', function($join){
    		$join->on('fridge_contents.ingredient_id', '=', 'recipe_ingredients.ingredient_id');
    		$join->on('fridge_contents.use_by', '>', DB::raw('CURRENT_DATE'));
    	})
    	->groupBy('recipe_ingredients.recipe_id')
    	->having(DB::raw('count(*)'), '=', DB::raw('count(fridge_contents.ingredient_id)') )
    	->orderBy('best_before', 'DESC');

    }
}

