<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class FridgeContent extends Model
{
    protected $fillable = ['ingredient_id','best_before','use_by'];

    public function ingredient(){
        return $this->belongsTo('App\Models\Ingredient');
    }


    public static function reloadContent(){
    	self::truncate();
    	foreach(Ingredient::all() as $ingredient){
    		self::create([
    			'ingredient_id' => $ingredient->id,
    			'best_before' => Carbon::now()->addDays(10),
    			'use_by' => Carbon::now()->addDays(20)
    		]);
    	}
    }
}
