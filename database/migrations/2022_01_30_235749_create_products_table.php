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
            $table->integer('category_name');
            $table->integer('brand_name');
            $table->string('product_name');
            $table->float('product_price',10,2);
            $table->integer('product_quntity');
            $table->text('short_description');
            $table->text('long_description');
            $table->string('product_image',150, ['normal', 'medium', 'high']);
            $table->tinyInteger('publication_status');
            $table->softDeletes();
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
