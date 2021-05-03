<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('recipe_name');
            $table->string('recipe_image');
            $table->text('recipe_about');
            $table->string('role_id');
            $table->string('price');
            $table->unsignedBigInteger('user_id');
            $table->string('recipe_role');
            $table->string('like')->default(0);
            $table->string('recipe_status')->default(0);
            $table->timestamps();

            $table->foreign("category_id")->references("id")->on('recipe_categories')->onDelete('cascade');
            $table->foreign("user_id")->references("id")->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
