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
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->text('product_description');
            $table->string('product_condition');
            $table->decimal('starting_bid_price', 10, 2);
            $table->decimal('min_bid_price', 10, 2);
            $table->datetime('bid_ending_date');    
            $table->text('special_product_notes')->nullable();    
            $table->string('product_images')->nullable();    
            $table->string('inspection_video')->nullable();    
            $table->boolean('is_featured')->nullable();    
            $table->string('status');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('product_categories');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
