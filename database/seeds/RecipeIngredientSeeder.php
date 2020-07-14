<?php

use Illuminate\Database\Seeder;

class RecipeIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

		$recipes = [
			'Indonesian Satay' => ['meat', 'peanut sauce'],
			'Beef Rendang' => ['beef', 'spice'],
			'Fried Rice' => ['seafood', 'chicken', 'veggies', 'onion'],	
			'Nasi Rawon' => ['egg', 'spice'],	
			'Sop Buntut' => ['meat', 'veggies'],	
			'Siomay' => ['potato', 'cabbage',  'egg'],
			'Indomie' => ['noodles', 'tomato'],	
			'Nasi Uduk' => ['onion', 'egg'],	
			'Sweet Martabak' => ['chocolate', 'cheese', 'peanuts'],	
			'Pempek' => ['vinegar', 'chill', 'sugar']	
		];


		foreach ($recipes as $recipe => $ingredients) {
			$dbRecipe = App\Models\Recipe::where('name', $recipe)->first();
			if(!$dbRecipe){
				continue;
			}
			foreach ($ingredients as $ingredient) {
				$dbIngredient = App\Models\Ingredient::where('name', $ingredient)->first();
				if(!$dbIngredient){
					continue;
				}
				
				DB::table('recipe_ingredients')->insert(['recipe_id'=> $dbRecipe->id, 'ingredient_id' => $dbIngredient->id]);
			}
		}

    }
}
