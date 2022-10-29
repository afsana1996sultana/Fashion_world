<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->string('title');
            $table->string('heading1');
            $table->string('heading2');
            $table->longText('detail');
            $table->string('other_heading');
            $table->longText('other_detail');
            $table->string('img1');
            $table->string('img2');
            $table->string('tab1');
            $table->string('tab2');
            $table->string('tab3');
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
        Schema::dropIfExists('abouts');
    }
}
