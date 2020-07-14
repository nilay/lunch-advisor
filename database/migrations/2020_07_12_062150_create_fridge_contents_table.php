<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFridgeContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fridge_contents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ingredient_id')->unsigned();
            $table->date('best_before');
            $table->date('use_by');
            $table->timestamps();
        });

        Schema::table('recipe_ingredients',function(Blueprint $table){
            $table->foreign('ingredient_id')
            ->references('id')
            ->on('ingredients')
            ->name('recipe_ingredients_ingredient_id_foreign2');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fridge_contents');
    }
}
