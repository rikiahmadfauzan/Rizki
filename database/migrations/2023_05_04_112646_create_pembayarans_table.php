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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->integer('idPembayaran');
            $table->date('tglBayar');
            $table->integer('totalBayar');
            $table->unsignedBigInteger('idTransaksi');
            $table->timestamps();

            // $table->foreign('idTransaksi')->references('idTransaksi')->on('transaksi');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
