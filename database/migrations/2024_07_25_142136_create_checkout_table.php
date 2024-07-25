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
        Schema::create('checkout', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('alamat_id')->constrained('alamat')->onDelete('cascade');
            $table->foreignId('toko_id')->constrained('toko')->onDelete('cascade');
            $table->foreignId('produk_id')->constrained('produk')->onDelete('cascade');
            $table->integer('kuantitas');
            $table->integer('harga_produk');
            $table->string('metode_pengiriman', 20);
            $table->integer('ongkos_kirim');
            $table->integer('total_pembayaran');
            $table->string('bukti_pembayaran')->nullable();
            $table->boolean('status_pembayaran')->default(false);
            $table->enum('status_pesanan', ['belum dibayar', 'dikemas', 'dikirim', 'diterima', 'dibatalkan']);
            $table->string('catatan', 100)->nullable();
            $table->string('resi')->nullable();
            $table->timestamp('tanggal_dibuat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout');
    }
};
