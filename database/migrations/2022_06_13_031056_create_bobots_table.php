<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBobotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bobots', function (Blueprint $table) {
            $table->id();
            $table->integer('inggris_lisan');
            $table->integer('arab_lisan');
            $table->integer('alquran');
            $table->integer('ibadah');
            $table->integer('inggris_tulis');
            $table->integer('arab_tulis');
            $table->integer('beban_prodi');
            $table->integer('matrik');
            $table->integer('fail');
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
        Schema::dropIfExists('bobots');
    }
}
