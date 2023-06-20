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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('idMenu');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('username');
            $table->string('email');
            $table->string('address');
            $table->string('payment');
            $table->date('tanggal');
            $table->integer('total');
            $table->string('kode');
            $table->timestamps();

            $table->foreign('idMenu')->references('idMenu')->on('cart')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
