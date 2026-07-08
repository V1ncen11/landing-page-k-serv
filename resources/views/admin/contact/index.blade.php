@extends('layouts.admin')

@section('content')
<div>
    <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between">
        <h1 class="text-2xl font-bold text-slate-800">Inbox Pesan Masuk</h1>
        <ol class="flex text-sm text-slate-500 mt-2 md:mt-0">
            <li><a href="{{ route('admin.dashboard') }}" class="text-indigo-600 hover:underline">Dashboard</a></li>
            <li class="mx-2">/</li>
            <li class="text-slate-400">Pesan Masuk</li>
        </ol>
    </div>

    @if(session('success'))
    <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-lg flex items-center gap-2">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
        <span class="font-medium">{{ session('success') }}</span>
    </div>
    @endif

    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="p-6 border-b border-slate-200 bg-slate-50 flex justify-between items-center">
            <h2 class="font-bold text-slate-800">Semua Pesan</h2>
            <span class="bg-slate-200 text-slate-700 text-xs font-bold px-3 py-1 rounded-full">{{ $messages->total() }} Pesan</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-600">
                <thead class="bg-white text-slate-400 uppercase text-xs border-b border-slate-200">
                    <tr>
                        <th class="px-6 py-4 font-semibold">Status</th>
                        <th class="px-6 py-4 font-semibold">Pengirim</th>
                        <th class="px-6 py-4 font-semibold">Pesan Singkat</th>
                        <th class="px-6 py-4 font-semibold">Waktu</th>
                        <th class="px-6 py-4 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($messages as $msg)
                    <tr class="hover:bg-slate-50 transition-colors {{ !$msg->is_read ? 'bg-indigo-50/30' : '' }}">
                        <td class="px-6 py-4">
                            @if(!$msg->is_read)
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-rose-100 text-rose-700">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span> Baru
                            </span>
                            @else
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600">
                                Dibaca
                            </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-bold text-slate-800 {{ !$msg->is_read ? 'text-black' : '' }}">{{ $msg->name }}</div>
                            <div class="text-xs text-slate-500 mt-0.5">{{ $msg->email }}</div>
                        </td>
                        <td class="px-6 py-4 max-w-md">
                            <p class="truncate {{ !$msg->is_read ? 'font-semibold text-slate-800' : 'text-slate-500' }}">
                                {{ strip_tags($msg->message) }}
                            </p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-slate-500 text-xs font-medium">
                            {{ $msg->created_at->diffForHumans() }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.contact.show', $msg->id) }}" class="inline-flex items-center gap-1 px-3 py-1.5 bg-indigo-50 hover:bg-indigo-100 text-indigo-700 rounded-lg text-xs font-bold transition-colors">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                    Buka
                                </a>
                                <form action="{{ route('admin.contact.destroy', $msg->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center gap-1 px-3 py-1.5 bg-rose-50 hover:bg-rose-100 text-rose-700 rounded-lg text-xs font-bold transition-colors">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-slate-400">
                            <svg class="w-12 h-12 mx-auto mb-3 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" /></svg>
                            <p class="font-medium text-slate-500">Belum ada pesan masuk sama sekali.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($messages->hasPages())
        <div class="p-4 border-t border-slate-200">
            {{ $messages->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
