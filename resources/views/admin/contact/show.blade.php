@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between">
        <h1 class="text-2xl font-bold text-slate-800">Detail Pesan Masuk</h1>
        <ol class="flex text-sm text-slate-500 mt-2 md:mt-0">
            <li><a href="{{ route('admin.contact.index') }}" class="text-indigo-600 hover:underline">Pesan Masuk</a></li>
            <li class="mx-2">/</li>
            <li class="text-slate-400">Detail Pesan</li>
        </ol>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden mb-6">
        <div class="p-6 md:p-8 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-full bg-[#673de6] text-white flex items-center justify-center text-xl font-black shadow-sm">
                    {{ strtoupper(substr($message->name, 0, 1)) }}
                </div>
                <div>
                    <h2 class="text-xl font-bold text-slate-900">{{ $message->name }}</h2>
                    <p class="text-slate-500 flex items-center gap-1.5 mt-0.5">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        <a href="mailto:{{ $message->email }}" class="hover:text-indigo-600 transition-colors">{{ $message->email }}</a>
                    </p>
                </div>
            </div>
            <div class="text-right">
                <div class="text-sm font-semibold text-slate-700">{{ $message->created_at->format('d M Y') }}</div>
                <div class="text-xs text-slate-500">{{ $message->created_at->format('H:i') }} WIB</div>
            </div>
        </div>

        <div class="p-6 md:p-8">
            <h3 class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-4">Isi Pesan:</h3>
            <div class="prose max-w-none text-slate-700 leading-relaxed whitespace-pre-wrap">{{ $message->message }}</div>
        </div>

        <div class="bg-slate-50 p-6 border-t border-slate-100 flex flex-col sm:flex-row gap-3 justify-end items-center">
            @php
                // WA formatting
                $waText = "Halo " . $message->name . ",\n\nTerima kasih telah menghubungi K-SERV. Menanggapi pesan Anda sebelumnya:\n\"" . Str::limit(strip_tags($message->message), 50) . "\"\n\n";
                // Only if email looks like a phone number (just a basic check, or we can just mailto)
            @endphp
            <a href="mailto:{{ $message->email }}" class="w-full sm:w-auto inline-flex justify-center items-center gap-2 bg-slate-800 hover:bg-slate-900 text-white px-6 py-2.5 rounded-lg font-bold transition-colors">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                Balas via Email
            </a>
            <form action="{{ route('admin.contact.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan ini?');" class="w-full sm:w-auto">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full sm:w-auto inline-flex justify-center items-center gap-2 bg-white border border-slate-300 hover:bg-rose-50 hover:text-rose-700 hover:border-rose-200 text-slate-700 px-6 py-2.5 rounded-lg font-bold transition-colors">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                    Hapus Pesan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
