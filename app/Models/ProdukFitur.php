<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukFitur extends Model
{
    protected $table = 'produk_fiturs';
    protected $fillable = [
        'produk_id', 'nama_fitur', 'deskripsi_fitur', 'gambar_fitur'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
