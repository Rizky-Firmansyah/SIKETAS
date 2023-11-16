<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_panen_kelompok', function (Blueprint $table) {
            $table->bigIncrements('id_panen_kelompok');
            $table->integer('id_kelompok')->nullable();
            $table->date('tanggal_keberangkatan');
            $table->string('tujuan_pks');
            $table->string('no_spb');
            $table->string('nama_supir');
            $table->string('no_kendaraan');
            $table->integer('bruto')->nullable();
            $table->integer('sortasi')->nullable();
            $table->integer('netto')->nullable();
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
        Schema::dropIfExists('tb_panen_kelompok');
    }
};
