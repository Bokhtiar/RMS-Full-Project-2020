<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('ip_address');
            $table->string('creator_id');
            $table->unsignedBigInteger('recipe_id');
            $table->string('payment_status')->default(0);
            $table->string('quantity')->default(1);
            $table->unsignedBigInteger('order_id')->nullable();
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on('users')->onDelete('cascade');
            $table->foreign("recipe_id")->references("id")->on('recipes')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
