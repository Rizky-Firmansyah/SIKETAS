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
        Schema::create('tb_anggota', function (Blueprint $table) {
            $table->bigIncrements('id_anggota');
            $table->integer('id_kelompok');
            $table->string('nama_petani', 45);
            $table->string('alamat', 45);
            $table->string('no_hp', 45);
            $table->integer('umur');
            $table->integer('luas_lahan');
            $table->string('no_sertifikat', 45);
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
        Schema::dropIfExists('tb_anggota');
    }
};