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
        Schema::create('rt', function (Blueprint $table) {
            $table->id('id_rt');
            $table->unsignedBigInteger('id_rw');
            $table->unsignedBigInteger('id_dusun');
            $table->string('alamat_rt');
            $table->foreign('id_rw')->references('id_rw')->on('rw')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('id_dusun')->references('id_dusun')->on('dusun')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rt');
    }
};
