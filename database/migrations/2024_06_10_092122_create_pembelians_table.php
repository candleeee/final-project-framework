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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama_profile');
            $table->string('nama_barang');
            $table->integer('jumlah_produk'); // Menambahkan kolom untuk jumlah produk yang dibeli
            $table->decimal('harga_barang', 10, 2); // Mengubah tipe data harga_barang menjadi decimal
            $table->decimal('total_harga', 10, 2); // Menambahkan kolom untuk total harga
            $table->text('alamat');
            $table->string('metode_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelians');
    }
};
