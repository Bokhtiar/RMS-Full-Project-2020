<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuturerecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('futurerecipes', function (Blueprint $table) {
            $table->id();
            $table->string('frecipe_name');
            $table->string('frecipe_image');
            $table->text('frecipe_about');
            $table->string('role_id');
            $table->string('user_id');
            $table->string('frecipe_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('futurerecipes');
    }
}
