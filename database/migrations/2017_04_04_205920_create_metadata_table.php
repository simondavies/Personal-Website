<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetadataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metadata', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title", 255)->required();
            $table->text("description")->required();
            $table->string("keywords", 255)->nullable();
            $table->string("facebook_img", 255)->required();
            $table->string("twitter_img", 255)->required();
            $table->string("google_img", 255)->required();
            $table->string("instagram_img", 255)->required();
            $table->morphs('metadatable');
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
        Schema::dropIfExists('metadata');
    }
}
