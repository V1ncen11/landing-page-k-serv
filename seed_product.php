<?php

use App\Models\Produk;

$produk = new Produk();
$produk->nama = 'Aplikasi Kasir (Web POS)';
$produk->kategori = 'Jasa';
$produk->deskripsi = 'Tingkatkan efisiensi bisnis dengan sistem kasir cerdas berbasis web. Pantau penjualan, stok barang, dan laporan keuangan dari mana saja secara real-time.';
$produk->harga = '2.500.000 - 5.000.000';
$produk->gambar = null;
$produk->link = 'https://wa.me/6287870402431';
$produk->spesifikasi = "Manajemen Stok & Inventory\nLaporan Penjualan Otomatis\nDukungan Printer Struk (Thermal)\nHak Akses Multi-User (Kasir/Admin)\nAkses Cloud Real-time 24/7\nSupport Teknis 3 Bulan";
$produk->is_active = true;
$produk->save();

echo "Product created successfully!";
