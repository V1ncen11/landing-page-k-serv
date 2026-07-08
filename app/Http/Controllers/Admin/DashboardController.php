<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Blog;

use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

class DashboardController extends Controller
{
    public function index()
    {
        $totalJasa = Produk::where('kategori', 'Jasa')->count();
        $totalPortofolio = Produk::where('kategori', 'Portofolio')->count();
        $totalBlog = Blog::count();
        
        $totalViews = 0;
        $totalVisitors = 0;
        
        try {
            // Fetch total visitors and page views for the last 7 days
            $analyticsData = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));
            
            if ($analyticsData->count() > 0) {
                $totalVisitors = $analyticsData->sum('activeUsers'); 
                $totalViews = $analyticsData->sum('screenPageViews');
            }
        } catch (\Exception $e) {
            \Log::error('Analytics API Error: ' . $e->getMessage());
        }

        return view('admin.dashboard', compact('totalJasa', 'totalPortofolio', 'totalBlog', 'totalViews', 'totalVisitors'));
    }
}
