<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageConentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_conents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("page_id")->required();
            $table->integer("version_id")->nullable();
            $table->string("title")->required()->index();
            $table->text("body")->nullable();
            $table->text("excerpt")->nullable();
            $table->string("meta_title", 255)->required();
            $table->text("meta_description")->required();
            $table->text("meta_keywords")->nullable();
            $table->boolean("status")->default(0);
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
        Schema::dropIfExists('page_conents');
    }
}
