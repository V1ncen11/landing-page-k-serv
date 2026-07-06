<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Blog;

class LandingController extends Controller
{
    public function index()
    {
        $produks = Produk::active()->orderBy('created_at', 'asc')->get();
        return view('landing', compact('produks'));
    }

    public function about()
    {
        return view('about');
    }

    public function portofolioIndex()
    {
        $portofolios = Produk::active()->where('kategori', 'Portofolio')->orderBy('created_at', 'desc')->get();
        return view('portofolio.index', compact('portofolios'));
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

    public function blogIndex()
    {
        $blogs = Blog::where('is_published', true)->orderBy('created_at', 'desc')->paginate(9);
        return view('blog.index', compact('blogs'));
    }

    public function blogShow($slug)
    {
        $blog = Blog::where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('blog.show', compact('blog'));
    }
}
