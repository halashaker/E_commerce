<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name')->nullable();
            $table->double('sell_price')->nullable();
            $table->integer('total_q')->nullable();
            $table->text('description')->nullable();
            $table->enum('color',['BLACK','WHITE','RED','BLUE','YALLOW','GREEN','ORANGE','PURPLE','PINK'])->default('WHITE');
            $table->enum('size',['S','M','L','XL','XXL','34','35','36','37','38','39','40','41','42','43','44','45'])->default('S');
            $table->string('image')->nullable();
            $table->bigInteger('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
