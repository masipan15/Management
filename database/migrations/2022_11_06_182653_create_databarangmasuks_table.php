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
        Schema::create('databarangmasuks', function (Blueprint $table) {
            $table->id();
            $table->string('suppliers_id')->constrained('suppliers')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->string('kodebarang_id')->nullable();
            $table->foreignId('barangs_id')->constrained('barangs')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->string('kategoris_id');
            $table->string('merk')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('harga')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('databarangmasuks');
    }
};
