<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        if (request()->query('type') === 'portofolio') {
            return view('admin.produk.create-portofolio');
        }
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'        => 'required|string|max:255',
            'kategori'    => 'required',
            'harga'       => 'required|string',
            'deskripsi'   => 'required',
            'spesifikasi' => 'nullable|string',
            'link'        => 'nullable|url',
            'gambar'      => 'nullable|url',
            'masalah'     => 'nullable|string',
            'solusi'      => 'nullable|string',
            'teknologi'   => 'nullable|string',
            'hasil'       => 'nullable|string',
        ]);

        Produk::create([
            'nama'        => $request->nama,
            'kategori'    => $request->kategori,
            'harga'       => $request->harga,
            'deskripsi'   => $request->deskripsi,
            'spesifikasi' => $request->spesifikasi,
            'link'        => $request->link ?: 'https://wa.me/6287870402431',
            'gambar'      => $request->gambar,
            'masalah'     => $request->masalah,
            'solusi'      => $request->solusi,
            'teknologi'   => $request->teknologi,
            'hasil'       => $request->hasil,
            'is_active'   => true,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Berhasil ditambah!');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'        => 'required|string|max:255',
            'kategori'    => 'required',
            'harga'       => 'required|string',
            'deskripsi'   => 'required',
            'spesifikasi' => 'nullable|string',
            'link'        => 'nullable|url',
            'gambar'      => 'nullable|url',
            'masalah'     => 'nullable|string',
            'solusi'      => 'nullable|string',
            'teknologi'   => 'nullable|string',
            'hasil'       => 'nullable|string',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update([
            'nama'        => $request->nama,
            'kategori'    => $request->kategori,
            'harga'       => $request->harga,
            'deskripsi'   => $request->deskripsi,
            'spesifikasi' => $request->spesifikasi,
            'link'        => $request->link ?: 'https://wa.me/6287870402431',
            'gambar'      => $request->gambar,
            'masalah'     => $request->masalah,
            'solusi'      => $request->solusi,
            'teknologi'   => $request->teknologi,
            'hasil'       => $request->hasil,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus!');
    }

    // Toggle aktif / nonaktif
    public function toggleActive($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->update(['is_active' => !$produk->is_active]);

        $status = $produk->is_active ? 'diaktifkan' : 'disembunyikan';
        return redirect()->route('admin.produk.index')->with('success', "Produk berhasil {$status}!");
    }
}