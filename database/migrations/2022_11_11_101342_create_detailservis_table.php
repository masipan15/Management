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
        Schema::create('detailservis', function (Blueprint $table) {
            $table->id();
            $table->string('notransaksi_id')->nullable();
            $table->string('pemesan')->nullable();
            $table->string('peservis')->nullable();
            $table->string('namabarang')->nullable();
            $table->string('status')->nullable();
            $table->string('kerusakan')->nullable();
            $table->string('merk')->nullable();
            $table->string('biaya')->nullable();
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
        Schema::dropIfExists('detailservis');
    }
};
