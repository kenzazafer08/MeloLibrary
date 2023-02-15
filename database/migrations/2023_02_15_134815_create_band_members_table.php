<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('band_members', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('band_id');
            $table->unsignedBigInteger('artist_id');
            $table->foreign('band_id')->references('id')->on('bands');
            $table->foreign('artist_id')->references('id')->on('artists');
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
        Schema::dropIfExists('band_members');
    }
}
