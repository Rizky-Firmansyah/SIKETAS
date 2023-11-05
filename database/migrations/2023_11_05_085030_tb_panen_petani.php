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
        Schema::create('tb_panen_petani', function (Blueprint $table) {
            $table->bigIncrements('id_panen_petani');
            $table->integer('id_anggota');
            $table->integer('id_kelompok');
            $table->date('tgl_panen1')->nullable();
            $table->date('tgl_panen2')->nullable();
            $table->date('tgl_panen3')->nullable();
            $table->integer('tonase_panen1')->nullable();
            $table->integer('tonase_panen2')->nullable();
            $table->integer('tonase_panen3')->nullable();
            $table->integer('jumlah_janjang1')->nullable();
            $table->integer('jumlah_janjang2')->nullable();
            $table->integer('jumlah_janjang3')->nullable();
            $table->integer('total_tonase');
            $table->integer('total_janjang');
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
        Schema::dropIfExists('tb_panen_petani');
    }
};
