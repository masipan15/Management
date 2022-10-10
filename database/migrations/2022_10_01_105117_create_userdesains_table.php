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
        Schema::create('userdesains', function (Blueprint $table) {
            $table->id();
            $table->string('namapemesan');
            $table->string('namapedesains')->nullable();
            $table->string('permintaan');
            $table->string('harga');
            $table->string('keterangan');
            $table->string('ukuran');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('userdesains');
    }
};
