<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = [
        'nama', 'kategori', 'deskripsi', 'spesifikasi', 'harga', 'gambar', 'link', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Scope: hanya tampilkan produk yang aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function fiturs()
    {
        return $this->hasMany(ProdukFitur::class);
    }
}
