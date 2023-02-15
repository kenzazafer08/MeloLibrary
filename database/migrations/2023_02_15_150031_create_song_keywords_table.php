<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_keywords', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('music_id');
            $table->unsignedBigInteger('keyword_id');
            $table->foreign('music_id')->references('id')->on('musics');
            $table->foreign('keyword_id')->references('id')->on('keywords');
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
        Schema::dropIfExists('song_keywords');
    }
}
