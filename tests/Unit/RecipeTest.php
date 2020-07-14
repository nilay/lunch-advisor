<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\FridgeContent;
use Carbon\Carbon;

class RecipeTest extends TestCase
{

    /**
     * The DB seeder initially make all recipes available by making their ingredient 
     * available in fridge 
     *
     * @return void
     */
    public function test_all_recipes_are_available_for_lunch()
    {
        $this->assertEquals(Recipe::available()->get()->count(), Recipe::all()->count());
    }


    /**
     * Make sure, Recipe, which ingredient is passes its best_before_use date, should   
     * come at the bottom of the list
     *
     * @return void
     */
    public function test_near_expiry_recipes_shall_come_bottom_ot_the_list()
    {
        $ingresientName = 'egg';
    	$ingredient = Ingredient::where('name', '=', $ingresientName)->firstOrFail();
    	FridgeContent::where('ingredient_id', '=', $ingredient->id)->update(['best_before' => Carbon::now()->yesterday() ]);
    	

        $eggRecpId = [];
        $avlRecp = [];
        $availableRecipes =  Recipe::available()->get();
        foreach(Recipe::hasIngredient($ingresientName)->get() as $recp){
        	array_push($eggRecpId, $recp->id);
        	array_push($avlRecp,  $availableRecipes->pop()->id);
        }

        $this->assertEqualsCanonicalizing($eggRecpId, $avlRecp);

    }


    /**
     * Make sure, Recipe, which ingredient is expired shall not come in the list   
     *
     * @return void
     */
    public function test_near_expiry_recipes_shall_not_come_in_list()
    {
        $ingresientName = 'egg';
    	$ingredient = Ingredient::where('name', '=', $ingresientName)->firstOrFail();
    	FridgeContent::where('ingredient_id', $ingredient->id)->update(['use_by' => Carbon::now()->yesterday() ]);

        $this->assertEquals(
        	Recipe::available()->get()->count(), 
        	Recipe::doNotHaveIngredient($ingresientName)->get()->count()
        );
    }
	 

}
