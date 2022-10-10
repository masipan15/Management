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
        Schema::create('desains', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->string('permintaan_desain');
            $table->integer('harga_desain')->nullable();
            $table->string('keterangan');
            $table->string('ukuran_desain');
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
        Schema::dropIfExists('desains');
    }
};
