<?php

use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
        	[ 'name' => 'meat', 'description' => ''],
        	[ 'name' => 'peanut sauce', 'description' => ''],
        	[ 'name' => 'beef', 'description' => ''],
        	[ 'name' => 'spice', 'description' => ''],
        	[ 'name' => 'seafood', 'description' => ''],
        	[ 'name' => 'veggies', 'description' => ''],
        	[ 'name' => 'onion', 'description' => ''],
        	[ 'name' => 'egg', 'description' => ''],
        	[ 'name' => 'potato', 'description' => ''],
        	[ 'name' => 'cabbage', 'description' => ''],
        	[ 'name' => 'noodles', 'description' => ''],
        	[ 'name' => 'tomato', 'description' => ''],
        	[ 'name' => 'chocolate', 'description' => ''],
        	[ 'name' => 'cheese', 'description' => ''],
        	[ 'name' => 'peanuts', 'description' => ''],
        	[ 'name' => 'vinegar', 'description' => ''],
        	[ 'name' => 'sugar', 'description' => ''],
        	[ 'name' => 'chill', 'description' => '']
 
    	]);
    }
}
