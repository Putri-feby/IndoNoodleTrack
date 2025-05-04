<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retur_bahan_baku', function (Blueprint $table) {
            $table->id('id_retur');
            $table->integer('jumlah_retur');
            $table->date('tanggal_retur');
            $table->string('status_retur');
            $table->unsignedBigInteger('id_bahanbaku');
            $table->foreign('id_bahanbaku')->references('id_bahanbaku')->on('bahan_baku');
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
        Schema::dropIfExists('retur_bahan_baku');
    }
};
