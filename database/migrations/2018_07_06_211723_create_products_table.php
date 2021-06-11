<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('user_id');
            $table->string('slug',160);
            $table->string('product_name',150);
            $table->text('product_detail');
            $table->string('email')->unique();
            $table->string('phone',15)->unique()->nullable();
            $table->string('address',200)->nullable();
            $table->text('maps');
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
        Schema::dropIfExists('products');
    }
}