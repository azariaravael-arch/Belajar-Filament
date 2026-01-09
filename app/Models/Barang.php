<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'foto_sampul',
        'isbn',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'kategori_id',
        'stok',
        'harga_beli',
        'harga_jual',
    ];

   public function kategori()
{
    return $this->belongsTo(\App\Models\Kategori::class);
}

}
