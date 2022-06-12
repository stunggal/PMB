<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('school');
            $table->integer('registration_number');
            $table->integer('inggris_lisan');
            $table->integer('arab_lisan');
            $table->integer('alquran');
            $table->integer('ibadah');
            $table->integer('arab_tulis');
            $table->integer('inggris_tulis');
            $table->integer('dirasah_islamiyah');
            $table->integer('pengetahuan_umum');
            $table->integer('mtk');
            $table->integer('fisika');
            $table->integer('kimia');
            $table->integer('biologi');
            $table->integer('tbi');
            $table->integer('average')->nullable();
            $table->foreignId('period_id')->nullable();
            $table->string('first_choice');
            $table->string('second_choice');
            $table->string('third_choice');
            $table->string('final_choice')->nullable();
            $table->string('status')->nullable();
            $table->string('first_rank');
            $table->string('second_rank');
            $table->string('third_rank');
            $table->string('fourth_rank');
            $table->string('fifth_rank');
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
        Schema::dropIfExists('participants');
    }
}
