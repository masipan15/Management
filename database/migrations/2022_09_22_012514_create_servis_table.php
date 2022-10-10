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
        Schema::create('servis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan')->nullable();
            $table->string('nama_barang');
            $table->string('namaservis');
            $table->string('merk_barang');
            $table->string('kerusakan_barang');
            $table->string('status_pengerjaan')->nullable();
            $table->string('biaya_pengerjaan')->nullable();
            $table->string('fotos')->nullable();
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
        Schema::dropIfExists('servis');
    }
};
