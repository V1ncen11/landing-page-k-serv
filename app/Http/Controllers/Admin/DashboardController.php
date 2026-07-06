<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Blog;

class DashboardController extends Controller
{
    public function index()
    {
        $totalJasa = Produk::where('kategori', 'Jasa')->count();
        $totalPortofolio = Produk::where('kategori', 'Portofolio')->count();
        $totalBlog = Blog::count();
        $totalViews = Blog::sum('views');

        return view('admin.dashboard', compact('totalJasa', 'totalPortofolio', 'totalBlog', 'totalViews'));
    }
}
