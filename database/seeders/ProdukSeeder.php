<?php

namespace Database\Seeders;
use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    
    Produk::create([
        'nama' => 'Template PPT Aesthetic',
        'kategori' => 'Template',
        'deskripsi' => 'Template presentasi modern untuk tugas kuliah atau bisnis.',
        'harga' => 25000,
        'link' => 'https://wa.me/087870402431'
    ]);

    Produk::create([
        'nama' => 'Landing Page',
        'kategori' => 'Jasa',
        'deskripsi' => 'Pembuatan Landing Page',
        'harga' => 3000000,
        'link' => 'https://wa.me/087870402431'
    ]);
}
}
