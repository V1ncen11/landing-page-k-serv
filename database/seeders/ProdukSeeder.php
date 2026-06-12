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
        // Hapus jasa dan portofolio yang lama biar bersih
        Produk::whereIn('kategori', ['Jasa', 'Portofolio'])->delete();

        // --- SEEDER JASA ---
        Produk::create([
            'nama' => 'Landing Page Promosi',
            'kategori' => 'Jasa',
            'deskripsi' => 'Website 1 halaman super cepat yang dirancang khusus untuk meningkatkan konversi penjualan dan promosi produk kamu.',
            'harga' => '1.500.000 - 3.500.000',
            'spesifikasi' => "Desain Premium & Responsif\nCopywriting Menarik\nTombol WhatsApp Cepat\nGratis Domain (.com) 1 Tahun\nGratis Hosting Super Cepat\nBebas Revisi 3x",
            'link' => 'https://wa.me/6287870402431'
        ]);

        Produk::create([
            'nama' => 'Website Company Profile',
            'kategori' => 'Jasa',
            'deskripsi' => 'Tampil profesional di internet dengan website profil perusahaan yang modern, elegan, dan siap meningkatkan kredibilitas bisnismu.',
            'harga' => '4.500.000 - 8.000.000',
            'spesifikasi' => "Maksimal 5 Halaman Custom\nDesain UI/UX Eksklusif\nOptimasi SEO Dasar (Google)\nGratis Email Bisnis Resmi\nGratis Domain & Hosting 1 Tahun\nSupport Teknis 1 Bulan",
            'link' => 'https://wa.me/6287870402431'
        ]);

        Produk::create([
            'nama' => 'Sistem Web Custom',
            'kategori' => 'Jasa',
            'deskripsi' => 'Punya ide bisnis unik? Kami bantu buatkan sistem web cerdas (seperti kasir, inventory, ujian online) khusus untuk alur bisnismu.',
            'harga' => '12.000.000 - 25.000.000',
            'spesifikasi' => "Fitur Sesuai Permintaan (Custom)\nDashboard Admin Interaktif\nKeamanan Data Terjamin\nGratis Server Hosting Spesifikasi Tinggi\nGratis Training Penggunaan\nMaintenance & Support 3 Bulan",
            'link' => 'https://wa.me/6287870402431'
        ]);

        Produk::create([
            'nama' => 'Website Toko Online (E-Commerce)',
            'kategori' => 'Jasa',
            'deskripsi' => 'Jualan makin laris dengan toko online sendiri. Terintegrasi fitur pembayaran otomatis (GoPay, OVO, Virtual Account) & hitung ongkir.',
            'harga' => '6.000.000 - 15.000.000',
            'spesifikasi' => "Integrasi Payment Gateway\nCek Ongkir Otomatis JNE/JNT dll\nManajemen Produk & Stok\nLaporan Penjualan Otomatis\nNotifikasi Pesanan WhatsApp\nMaintenance 1 Bulan",
            'link' => 'https://wa.me/6287870402431'
        ]);

        Produk::create([
            'nama' => 'Undangan Digital (Wedding)',
            'kategori' => 'Jasa',
            'deskripsi' => 'Sebar undangan pernikahan lebih praktis, hemat, dan modern. Desain kekinian dengan fitur buku tamu digital.',
            'harga' => '350.000 - 1.000.000',
            'spesifikasi' => "Banyak Pilihan Tema Premium\nFitur RSVP & Buku Tamu\nGaleri Prewedding\nBacksound Musik Romantis\nHitung Mundur Acara\nMasa Aktif Selamanya",
            'link' => 'https://wa.me/6287870402431'
        ]);

        // --- SEEDER PORTOFOLIO ---
        Produk::create([
            'nama' => 'E-Commerce Fashion "StyleUp"',
            'kategori' => 'Portofolio',
            'deskripsi' => 'Website toko online lengkap dengan fitur keranjang belanja dan payment gateway otomatis.',
            'harga' => '0',
            'spesifikasi' => '',
            'gambar' => '/images/portofolio/porto_ecommerce.png',
            'link' => '#'
        ]);
        
        Produk::create([
            'nama' => 'Dashboard Analytics "FinTrack"',
            'kategori' => 'Portofolio',
            'deskripsi' => 'Aplikasi web interaktif untuk memantau arus kas perusahaan dan laporan penjualan B2B.',
            'harga' => '0',
            'spesifikasi' => '',
            'gambar' => '/images/portofolio/porto_dashboard.png',
            'link' => '#'
        ]);
        
        Produk::create([
            'nama' => 'Profil Resto "Kopi Senja"',
            'kategori' => 'Portofolio',
            'deskripsi' => 'Website profil bisnis F&B modern dengan fitur reservasi meja dan buku menu digital.',
            'harga' => '0',
            'spesifikasi' => '',
            'gambar' => '/images/portofolio/porto_resto.png',
            'link' => '#'
        ]);

        Produk::create([
            'nama' => 'Landing Page "TechFlow" SaaS',
            'kategori' => 'Portofolio',
            'deskripsi' => 'Desain landing page modern dengan konversi tinggi untuk startup SaaS (Software as a Service).',
            'harga' => '0',
            'spesifikasi' => '',
            'gambar' => '/images/portofolio/porto_saas.png',
            'link' => '#'
        ]);
        
        Produk::create([
            'nama' => 'Website Edukasi "LearnHub"',
            'kategori' => 'Portofolio',
            'deskripsi' => 'Platform e-learning interaktif dengan fitur e-course dan registrasi siswa online.',
            'harga' => '0',
            'spesifikasi' => '',
            'gambar' => '/images/portofolio/porto_edukasi.png',
            'link' => '#'
        ]);

        Produk::create([
            'nama' => 'Profil Perusahaan "BuildCorp"',
            'kategori' => 'Portofolio',
            'deskripsi' => 'Website company profile premium dan elegan untuk perusahaan konstruksi berskala nasional.',
            'harga' => '0',
            'spesifikasi' => '',
            'gambar' => '/images/portofolio/porto_konstruksi.png',
            'link' => '#'
        ]);
    }
}
