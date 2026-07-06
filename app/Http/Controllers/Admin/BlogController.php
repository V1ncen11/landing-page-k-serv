<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::orderBy('created_at', 'desc');
        
        if ($request->has('search') && $request->search != '') {
            $searchTerm = strtolower($request->search);
            $query->where(function($q) use ($searchTerm) {
                $q->whereRaw('LOWER(title) LIKE ?', ['%' . $searchTerm . '%'])
                  ->orWhereRaw('LOWER(category) LIKE ?', ['%' . $searchTerm . '%']);
            });
        }

        $blogs = $query->paginate(10)->appends(['search' => $request->search]);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'nullable|string|max:255|unique:blogs,slug',
            'category'         => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'content'          => 'required',
            'image'            => 'nullable|url',
        ]);

        $slug = $request->slug ? Str::slug($request->slug) : Str::slug($request->title);

        Blog::create([
            'title'            => $request->title,
            'slug'             => $slug,
            'category'         => $request->category,
            'meta_description' => $request->meta_description,
            'content'          => $request->content,
            'image'            => $request->image,
            'is_published'     => $request->has('is_published'),
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Blog berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'nullable|string|max:255|unique:blogs,slug,' . $id,
            'category'         => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'content'          => 'required',
            'image'            => 'nullable|url',
        ]);

        $slug = $request->slug ? Str::slug($request->slug) : Str::slug($request->title);

        $blog = Blog::findOrFail($id);
        $blog->update([
            'title'            => $request->title,
            'slug'             => $slug,
            'category'         => $request->category,
            'meta_description' => $request->meta_description,
            'content'          => $request->content,
            'image'            => $request->image,
            'is_published'     => $request->has('is_published'),
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Blog berhasil diupdate!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Blog berhasil dihapus!');
    }
}
