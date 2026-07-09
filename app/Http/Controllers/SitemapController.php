<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Produk;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    public function index()
    {
        // Cache sitemap selama 1 jam (3600 detik) untuk menghemat load database
        $sitemapContent = Cache::remember('sitemap.xml', 3600, function () {
            // Rute statis
            $staticRoutes = [
                ['url' => url('/'), 'lastmod' => date('Y-m-d\TH:i:sP'), 'priority' => '1.0'],
                ['url' => url('/tentang-kami'), 'lastmod' => date('Y-m-d\TH:i:sP'), 'priority' => '0.8'],
                ['url' => url('/portofolio'), 'lastmod' => date('Y-m-d\TH:i:sP'), 'priority' => '0.8'],
                ['url' => url('/blog'), 'lastmod' => date('Y-m-d\TH:i:sP'), 'priority' => '0.8'],
            ];

            // Rute dinamis: Blog
            $blogs = Blog::where('is_published', true)->orderBy('updated_at', 'desc')->get();
            $dynamicBlogs = [];
            foreach ($blogs as $blog) {
                $dynamicBlogs[] = [
                    'url' => url('/blog/' . $blog->slug),
                    'lastmod' => $blog->updated_at->toAtomString(),
                    'priority' => '0.6'
                ];
            }

            // Rute dinamis: Portofolio
            $portofolios = Produk::active()->where('kategori', 'Portofolio')->orderBy('updated_at', 'desc')->get();
            $dynamicPortofolios = [];
            foreach ($portofolios as $porto) {
                $dynamicPortofolios[] = [
                    'url' => url('/portofolio/' . $porto->id),
                    'lastmod' => $porto->updated_at->toAtomString(),
                    'priority' => '0.7'
                ];
            }

            $urls = array_merge($staticRoutes, $dynamicPortofolios, $dynamicBlogs);

            return view('sitemap', compact('urls'))->render();
        });

        return response($sitemapContent)->header('Content-Type', 'text/xml');
    }
}
