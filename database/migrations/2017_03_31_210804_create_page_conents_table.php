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
        Schema::create('pages_content', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("page_id")->unsigned()->required();
            $table->integer("version_id")->nullable();
            $table->string("title")->required()->index();
            $table->text("body")->nullable();
            $table->text("excerpt")->nullable();
            $table->boolean("status")->default(0);
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages_content');
    }
}
