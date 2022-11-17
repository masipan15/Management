<?php

use App\Http\Controllers\kategoriController;
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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('kodebarang');
            $table->foreignId('kategoris_id')->constrained('kategoris')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->string('namabarang');
            $table->string('merk');
            $table->text('deskripsi');
            $table->string('stok');
            $table->string('harga');
            $table->string('hargajual');
            $table->string('foto1')->nullable();
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
        Schema::dropIfExists('barangs');
    }
};
