<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\ProdukFitur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukFiturController extends Controller
{
    public function index($produkId)
    {
        $produk = Produk::findOrFail($produkId);
        $fiturs = $produk->fiturs()->orderBy('created_at', 'desc')->get();
        return view('admin.produk_fitur.index', compact('produk', 'fiturs'));
    }

    public function create($produkId)
    {
        $produk = Produk::findOrFail($produkId);
        return view('admin.produk_fitur.create', compact('produk'));
    }

    public function store(Request $request, $produkId)
    {
        $request->validate([
            'nama_fitur' => 'required|string|max:255',
            'deskripsi_fitur' => 'required|string',
            'gambar_fitur' => 'nullable|url',
        ]);

        $produk = Produk::findOrFail($produkId);

        $produk->fiturs()->create([
            'nama_fitur' => $request->nama_fitur,
            'deskripsi_fitur' => $request->deskripsi_fitur,
            'gambar_fitur' => $request->gambar_fitur,
        ]);

        return redirect()->route('admin.produk.fitur.index', $produk->id)->with('success', 'Fitur berhasil ditambahkan!');
    }

    public function edit($produkId, $id)
    {
        $produk = Produk::findOrFail($produkId);
        $fitur = ProdukFitur::findOrFail($id);
        return view('admin.produk_fitur.edit', compact('produk', 'fitur'));
    }

    public function update(Request $request, $produkId, $id)
    {
        $request->validate([
            'nama_fitur' => 'required|string|max:255',
            'deskripsi_fitur' => 'required|string',
            'gambar_fitur' => 'nullable|url',
        ]);

        $fitur = ProdukFitur::findOrFail($id);

        $fitur->update([
            'nama_fitur' => $request->nama_fitur,
            'deskripsi_fitur' => $request->deskripsi_fitur,
            'gambar_fitur' => $request->gambar_fitur,
        ]);

        return redirect()->route('admin.produk.fitur.index', $produkId)->with('success', 'Fitur berhasil diupdate!');
    }

    public function destroy($produkId, $id)
    {
        $fitur = ProdukFitur::findOrFail($id);
        $fitur->delete();

        return redirect()->route('admin.produk.fitur.index', $produkId)->with('success', 'Fitur berhasil dihapus!');
    }
}
