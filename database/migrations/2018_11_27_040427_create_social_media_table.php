<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->increments('social_media_id');
            $table->string('social_media_facebook');
            $table->string('social_media_twitter');
            $table->string('social_media_youtube');
            $table->string('social_media_google');
            $table->string('social_media_skype');
            $table->string('social_media_linkedin');
            $table->integer('social_media_status')->default(1);
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
        Schema::dropIfExists('social_media');
    }
}
