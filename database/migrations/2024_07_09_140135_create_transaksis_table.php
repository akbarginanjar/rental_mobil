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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->biginteger('id_penyewa')->unsigned();
                    //foreign
                    $table->foreign('id_penyewa')
                    ->references('id')
                    ->on('penyewas');
            $table->biginteger('id_mobil')->unsigned();
                    //foreign
                    $table->foreign('id_mobil')
                    ->references('id')
                    ->on('mobils');
            $table->date('tgl_sewa');
            $table->integer('lama_sewa');
            $table->string('total_bayar');
            $table->string('bukti_bayar')->nullable();
            $table->string('tgl_pengembalian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
