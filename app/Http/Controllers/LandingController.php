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
        $latestBlogs = Blog::where('is_published', true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('landing', compact('produks', 'latestBlogs'));
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

    public function blogIndex(Request $request)
    {
        $query = Blog::where('is_published', true)->orderBy('created_at', 'desc');

        if ($request->has('search') && $request->search != '') {
            $searchTerm = strtolower($request->search);
            $query->where(function($q) use ($searchTerm) {
                $q->whereRaw('LOWER(title) LIKE ?', ['%' . $searchTerm . '%'])
                  ->orWhereRaw('LOWER(category) LIKE ?', ['%' . $searchTerm . '%']);
            });
        }

        $blogs = $query->paginate(9)->appends(['search' => $request->search]);
        return view('blog.index', compact('blogs'));
    }

    public function blogShow($slug)
    {
        $blog = Blog::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $blog->increment('views');
        return view('blog.show', compact('blog'));
    }
}
