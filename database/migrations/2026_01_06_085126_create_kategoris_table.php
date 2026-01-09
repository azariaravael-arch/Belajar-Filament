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
    Schema::create('kategoris', function (Blueprint $table) {
        $table->id();
        $table->string('kode_kategori')->unique();
        $table->string('nama_kategori');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
    $table->foreignId('kategori_id')->constrained()->cascadeOnDelete();
    $table->string('isbn')->nullable();
    $table->string('penulis');
    $table->string('penerbit');
    $table->year('tahun_terbit');
    $table->integer('stok')->default(0);
    $table->decimal('harga_beli', 12, 2);
    $table->decimal('harga_jual', 12, 2);
});

    }
};
