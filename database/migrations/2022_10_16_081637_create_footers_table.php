<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->string('f_address');
            $table->string('f_phone');
            $table->string('f_email');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('instagram_url');
            $table->string('linkedin_url');
            $table->string('pinterest_url');
            $table->string('visa_img');
            $table->string('mastercard_img');
            $table->string('visa2_img');
            $table->string('mastercard2_img');
            $table->string('expresscard_img');
            $table->string('f_copyright');
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
        Schema::dropIfExists('footers');
    }
}
