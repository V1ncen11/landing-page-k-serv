<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class LandingController extends Controller
{
    public function index()
    {
        $produks = Produk::active()->orderBy('created_at', 'asc')->get();
        return view('landing', compact('produks'));
    }

    public function portofolioShow($id)
    {
        $portofolio = Produk::active()->findOrFail($id);
        
        // Ensure it's actually a portofolio
        if (strtolower($portofolio->kategori) != 'portofolio') {
            abort(404);
        }

        $fiturs = $portofolio->fiturs()->orderBy('created_at', 'asc')->get();
        
        return view('portofolio.show', compact('portofolio', 'fiturs'));
    }
}
