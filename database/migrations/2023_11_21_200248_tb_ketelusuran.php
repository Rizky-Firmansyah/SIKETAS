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
        Schema::create('tb_ketelusuran', function (Blueprint $table) {
            $table->bigIncrements('id_ketelusuran');
            $table->integer('id_panen_kelompok');
            $table->integer('id_kendaraan');
            $table->integer('id_sopir');
            $table->string('tujuan_pks');
            $table->string('no_spb');
            $table->integer('total_tonase_truck');
            $table->integer('total_janjang_truck');
            $table->integer('brutto');
            $table->integer('netto');
            $table->integer('sortasi');
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
        Schema::dropIfExists('tb_ketelusuran');
    }
};
