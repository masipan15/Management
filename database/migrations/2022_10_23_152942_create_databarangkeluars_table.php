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
        Schema::create('databarangkeluars', function (Blueprint $table) {
            $table->id();
            
            $table->string('nama_pelanggan')->nullable();
            $table->string('kodebarang_keluar');
            $table->foreignId('nama_barang')->constrained('barangs')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->string('merk_keluar');
            $table->string('harga_jual');
            $table->string('stok');
            $table->bigInteger('jumlah');
            $table->bigInteger('total');
            $table->bigInteger('subtotal')->nullable();
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
        Schema::dropIfExists('databarangkeluars');
    }
};
