<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; // Wajib buat hapus file di folder public

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required',
            'harga' => 'required|string', // Support format "3jt - 5jt"
            'deskripsi' => 'required',
            'link' => 'required|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Sudah diganti ke image
        ]);

        $data = $request->all();

        // Logika upload menggunakan nama kolom 'gambar'
        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images/portfolio'), $imageName);
            $data['gambar'] = $imageName;
        }

        Produk::create($data);
        return redirect()->route('admin.produk.index')->with('success', 'Produk Berhasil Ditambah!');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required',
            'harga' => 'required|string',
            'deskripsi' => 'required',
            'link' => 'required|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $produk = Produk::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus file lama di folder public/images/portfolio
            if ($produk->gambar && File::exists(public_path('images/portfolio/' . $produk->gambar))) {
                File::delete(public_path('images/portfolio/' . $produk->gambar));
            }

            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images/portfolio'), $imageName);
            $data['gambar'] = $imageName;
        }

        $produk->update($data);
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        // Hapus file fisik agar storage laptop DELL LATITUDE lo gak penuh
        if ($produk->gambar && File::exists(public_path('images/portfolio/' . $produk->gambar))) {
            File::delete(public_path('images/portfolio/' . $produk->gambar));
        }

        $produk->delete();
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus!');
    }
}