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
        Schema::create('desainselesais', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan')->nullable();
            $table->string('namapedesain')->nullable();
            $table->string('permintaan_desain')->nullable();
            $table->integer('harga_desain')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('ukuran_desain')->nullable();
            $table->string('status_pengerjaan')->nullable();
            $table->string('fotod')->nullable();
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
        Schema::dropIfExists('desainselesais');
    }
};
