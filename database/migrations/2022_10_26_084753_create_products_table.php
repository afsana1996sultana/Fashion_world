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
            $table->bigIncrements('id')->primary;
            $table->string('img');
            $table->string('banner_img');
            $table->string('p_name');
            $table->string('slug');
            $table->string('model_no');
            $table->string('category');
            $table->string('sub_category');
            $table->string('child_category');
            $table->string('brand');
            $table->string('purchase_scane');
            $table->string('unit');
            $table->string('price');
            $table->string('offer_price');
            $table->integer('stock_quantity');
            $table->longText('short_description');
            $table->longText('long_description');
            $table->string('tag');
            $table->string('tax');
            $table->string('warranty');
            $table->string('seo_title');
            $table->longText('seo_description');
            $table->string('status');
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
