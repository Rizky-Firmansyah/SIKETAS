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
            $table->integer('id_tgl_panen');
            $table->integer('total_tonase_petani');
            $table->integer('total_janjang_petani');
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
