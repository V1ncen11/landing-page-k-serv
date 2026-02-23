<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        // Baca query param ?type=portofolio untuk pisah halaman
        if (request()->query('type') === 'portofolio') {
            return view('admin.produk.create-portofolio');
        }
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required|string|max:255',
            'kategori' => 'required',
            'harga'    => 'required|string',
            'deskripsi'=> 'required',
            'link'     => 'required|url',
            'gambar'   => 'nullable|url',  // gambar sekarang URL, bukan file
        ]);

        Produk::create($request->only(['nama', 'kategori', 'harga', 'deskripsi', 'link', 'gambar']));

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
            'nama'     => 'required|string|max:255',
            'kategori' => 'required',
            'harga'    => 'required|string',
            'deskripsi'=> 'required',
            'link'     => 'required|url',
            'gambar'   => 'nullable|url',  // gambar sekarang URL, bukan file
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->only(['nama', 'kategori', 'harga', 'deskripsi', 'link', 'gambar']));

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus!');
    }
}