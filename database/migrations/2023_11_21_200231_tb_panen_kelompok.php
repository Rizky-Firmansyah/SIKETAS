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
            $table->integer('id_tanggal_panen');
            $table->integer('id_kelompok');
            $table->date('tanggal_keberangkatan');
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
        Schema::dropIfExists('tb_panen_kelompok');
    }
};
