<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengembaliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_anggota');
            $table->foreign('id_anggota')->references('id')->on('anggotas')->onDelete('CASCADE')->onUpdate('CASCADE');;
            $table->unsignedInteger('id_barang');
            $table->foreign('id_barang')->references('id')->on('barangs')->onDelete('CASCADE')->onUpdate('CASCADE');;
            $table->biginteger('jumlah_pinjam')->unsigned();
            $table->string('jadwal');
            $table->datetime('tanggal_pinjam');
            $table->datetime('tanggal_batas');
            $table->datetime('tanggal_kembali');
            $table->string('denda');
            $table->string('keterangan');
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
        Schema::dropIfExists('pengembalians');
    }
}
