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
        Schema::create('transaksidesains', function (Blueprint $table) {
            $table->id();
            $table->string('notransaksi')->nullable();
            $table->string('namakasir')->nullable();
            $table->string('namapemesan')->nullable();
            $table->string('status')->nullable();
            $table->string('permintaan')->nullable();
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
        Schema::dropIfExists('transaksidesains');
    }
};
