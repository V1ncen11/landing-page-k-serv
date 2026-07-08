<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Blog;

use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use Spatie\Analytics\OrderBy;

class DashboardController extends Controller
{
    public function index()
    {
        $totalJasa = Produk::where('kategori', 'Jasa')->count();
        $totalPortofolio = Produk::where('kategori', 'Portofolio')->count();
        $totalBlog = Blog::count();
        $topBlogs = Blog::orderBy('views', 'desc')->take(5)->get();
        
        $totalViews = 0;
        $totalVisitors = 0;
        $topCities = collect();
        
        try {
            // Fetch total visitors and page views for the last 7 days
            $analyticsData = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));
            
            if ($analyticsData->count() > 0) {
                $totalVisitors = $analyticsData->sum('activeUsers'); 
                $totalViews = $analyticsData->sum('screenPageViews');
            }
            
            // Fetch top 3 cities
            $topCities = Analytics::get(
                Period::days(7),
                ['screenPageViews'],
                ['city'],
                3,
                [OrderBy::metric('screenPageViews', true)]
            );
        } catch (\Exception $e) {
            \Log::error('Analytics API Error: ' . $e->getMessage());
        }

        return view('admin.dashboard', compact('totalJasa', 'totalPortofolio', 'totalBlog', 'totalViews', 'totalVisitors', 'topBlogs', 'topCities'));
    }
}
