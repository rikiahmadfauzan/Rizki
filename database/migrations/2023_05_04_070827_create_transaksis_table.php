<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('idTransaksi');
            $table->unsignedBigInteger('idMenu');
            $table->unsignedBigInteger('idPembeli');
            $table->date('tglTransaksi');
            $table->string('keterangan');

            $table->timestamps();


            // $table->foreign('idMenu')->references('idMenu')->on('menu');
            // $table->foreign('idPembeli')->references('idPembeli')->on('pembeli');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
