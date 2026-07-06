<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required',
            'image'   => 'nullable|url',
        ]);

        Blog::create([
            'title'        => $request->title,
            'slug'         => Str::slug($request->title),
            'content'      => $request->content,
            'image'        => $request->image,
            'is_published' => $request->has('is_published'),
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
            'title'   => 'required|string|max:255',
            'content' => 'required',
            'image'   => 'nullable|url',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update([
            'title'        => $request->title,
            'slug'         => Str::slug($request->title),
            'content'      => $request->content,
            'image'        => $request->image,
            'is_published' => $request->has('is_published'),
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
