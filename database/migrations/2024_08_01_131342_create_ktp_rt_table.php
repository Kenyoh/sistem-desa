<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ktp_rt', function (Blueprint $table) {
            $table->id('id_ktp_rt');
            $table->unsignedBigInteger('id_rt');
            $table->unsignedBigInteger('id_rw');
            $table->unsignedBigInteger('id_dusun');
            $table->string ('data_ktp_rt');
            $table->integer('kk_rt');
            $table->integer('kk_sm_rt');
            $table->integer('kk_bm_rt');
            $table->integer('lw_ktp_rt');
            $table->integer('pw_ktp_rt');
            $table->integer('lpw_ktp_rt');
            $table->integer('lm_ktp_rt');
            $table->integer('pm_ktp_rt');
            $table->integer('lpm_ktp_rt');
            $table->integer('lbm_ktp_rt');
            $table->integer('pbm_ktp_rt');
            $table->integer('lpbm_ktp_rt');
            $table->foreign('id_rt')->references('id_rt')->on('rt')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('id_rw')->references('id_rw')->on('rw')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('id_dusun')->references('id_dusun')->on('dusun')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ktp_rt');
    }
};
