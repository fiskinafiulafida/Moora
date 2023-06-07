<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alternatif_id');
            $table->foreignId('sub_kriteria1_id');
            $table->foreignId('sub_kriteria2_id');
            $table->foreignId('sub_kriteria3_id');
            $table->foreignId('sub_kriteria4_id');
            $table->foreignId('sub_kriteria5_id');
            $table->foreignId('sub_kriteria6_id');
            $table->foreignId('sub_kriteria7_id');
            $table->foreignId('sub_kriteria8_id');
            $table->foreignId('sub_kriteria9_id');
            $table->foreignId('sub_kriteria10_id');
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
        Schema::dropIfExists('penilaians');
    }
}
