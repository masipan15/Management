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
        Schema::create('barangmasuks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('suppliers_id')->constrained('suppliers')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->string('kodebarang_id')->nullable();
            $table->foreignId('barangs_id')->constrained('barangs')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->string('kategoris_id');
            $table->string('merk');
            $table->integer('jumlah');
            $table->string('harga');
            $table->string('total');
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
        Schema::dropIfExists('barangmasuks');
    }
};
