@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Content Header -->
    <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between">
        <h1 class="text-2xl font-bold text-slate-800">Edit Artikel</h1>
        <ol class="flex text-sm text-slate-500 mt-2 md:mt-0">
            <li><a href="{{ route('admin.dashboard') }}" class="text-indigo-600 hover:underline">Home</a></li>
            <li class="mx-2">/</li>
            <li><a href="{{ route('admin.blog.index') }}" class="text-indigo-600 hover:underline">Blog</a></li>
            <li class="mx-2">/</li>
            <li class="text-slate-400">Edit Artikel</li>
        </ol>
    </div>

    <!-- Card -->
    <div class="bg-white rounded-lg shadow-sm border-t-4 border-t-amber-500 border-x border-b border-slate-200">
        <!-- Card Header -->
        <div class="px-6 py-4 border-b border-slate-200">
            <h3 class="text-lg font-bold text-slate-700">Form Edit Artikel</h3>
        </div>
        
        <!-- Card Body -->
        <div class="p-6">

        @if($errors->any())
        <div class="mb-8 p-5 bg-rose-50 border border-rose-100 rounded-2xl">
            <p class="font-bold text-rose-600 mb-2">⚠️ Perbaiki kesalahan berikut:</p>
            <ul class="list-disc list-inside text-sm text-rose-500 space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" class="space-y-8">
            @csrf
            @method('PUT')

            {{-- Judul --}}
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wider">Judul Artikel</label>
                <input type="text" name="title" value="{{ old('title', $blog->title) }}" required
                    class="w-full rounded-2xl border-slate-200 focus:border-amber-500 focus:ring-amber-500 text-xl font-bold py-4 px-5 shadow-sm">
            </div>

            {{-- Cover Image --}}
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wider">URL Gambar Cover</label>
                <input type="url" name="image" value="{{ old('image', $blog->image) }}" id="gambar-input"
                    class="w-full rounded-2xl border-slate-200 focus:border-amber-500 focus:ring-amber-500 py-3 px-5 shadow-sm mb-3">
                <div id="preview-box" class="{{ $blog->image ? '' : 'hidden' }}">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Preview Gambar:</p>
                    <img id="preview-img" src="{{ $blog->image }}" class="w-full h-64 md:h-96 object-cover rounded-2xl border border-slate-100 shadow-inner">
                </div>
            </div>

            {{-- Content Editor --}}
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wider">Isi Konten Artikel</label>
                <!-- Include stylesheet -->
                <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
                <style>
                    .ql-toolbar.ql-snow { border-top-left-radius: 1rem; border-top-right-radius: 1rem; border-color: #e2e8f0; background-color: #f8fafc; padding: 12px; }
                    .ql-container.ql-snow { border-bottom-left-radius: 1rem; border-bottom-right-radius: 1rem; border-color: #e2e8f0; font-family: inherit; font-size: 1.125rem; }
                    .ql-editor { min-height: 400px; padding: 1.5rem; line-height: 1.7; color: #334155; }
                    .ql-editor h2 { font-weight: 900; font-size: 1.875rem; color: #0f172a; margin-top: 2rem; margin-bottom: 1rem; }
                    .ql-editor h3 { font-weight: 800; font-size: 1.5rem; color: #1e293b; margin-top: 1.5rem; margin-bottom: 0.75rem; }
                    .ql-editor p { margin-bottom: 1rem; }
                    .ql-editor img { border-radius: 0.75rem; margin: 1.5rem 0; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); }
                </style>
                
                <!-- Create the editor container -->
                <div id="editor-container">
                    <div id="editor">{!! old('content', $blog->content) !!}</div>
                </div>
                
                <!-- Hidden input untuk nyimpen HTML hasil dari Quill -->
                <input type="hidden" name="content" id="content-input">
            </div>

            {{-- Publish Status --}}
            <div class="flex items-center gap-4 bg-slate-50 p-6 rounded-2xl border border-slate-100">
                <input type="hidden" name="is_published" value="0">
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_published" value="1" class="sr-only peer" {{ $blog->is_published ? 'checked' : '' }}>
                    <div class="w-14 h-7 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-amber-500"></div>
                    <span class="ml-4 text-base font-bold text-slate-700">Artikel Terbit (Published)</span>
                </label>
            </div>

            {{-- Buttons --}}
            <div class="flex gap-4 pt-4 border-t border-slate-100 mt-6">
                <button type="submit" id="btn-submit" class="bg-amber-500 text-white px-6 py-2.5 rounded font-bold hover:bg-amber-600 transition flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    Update Artikel
                </button>
                <a href="{{ route('admin.blog.index') }}" class="px-6 py-2.5 bg-slate-100 rounded font-bold text-slate-600 hover:bg-slate-200 transition">
                    Batal
                </a>
            </div>
        </form>
        </div> <!-- End Card Body -->
    </div>
</div>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Init Quill Editor
        var toolbarOptions = [
            [{ 'header': [2, 3, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            ['link', 'image', 'video'],
            ['clean']
        ];

        var quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow',
            placeholder: 'Tuliskan ide brilian Anda di sini...'
        });

        // Set form submit
        const form = document.querySelector('form');
        const contentInput = document.getElementById('content-input');
        
        form.addEventListener('submit', function(e) {
            contentInput.value = quill.root.innerHTML;
        });

        // Image Preview
        const gambarInput = document.getElementById('gambar-input');
        if (gambarInput) {
            gambarInput.addEventListener('input', function() {
                const url = this.value.trim();
                const previewBox = document.getElementById('preview-box');
                const previewImg = document.getElementById('preview-img');
                if (url.startsWith('http')) {
                    previewImg.src = url;
                    previewBox.classList.remove('hidden');
                } else {
                    previewBox.classList.add('hidden');
                }
            });
        }
    });
</script>
@endsection
