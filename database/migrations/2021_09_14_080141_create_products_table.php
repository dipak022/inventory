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
            $table->string('category_id');
            $table->string('supplier_id');
            $table->string('product_name')->nullable();
            $table->string('product_code')->nullable();
            $table->string('baying_price')->nullable();
            $table->string('selling_price')->nullable();
            
            $table->string('root')->nullable();
            $table->string('baying_date')->nullable();
            $table->string('patho')->nullable();
            $table->string('product_quantaty')->nullable();
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
