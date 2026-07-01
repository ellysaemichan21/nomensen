@extends('layouts.app')

@section('title', 'Berita & Artikel Kampus - Universitas HKBP Nomensen')

@section('content')
<div class="bg-gradient-to-b from-slate-900 to-blue-950 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">Berita & Kegiatan Kampus</h1>
        <p class="mt-4 text-slate-300 max-w-xl mx-auto">Update artikel ilmiah, kegiatan kemahasiswaan, dan liputan khusus.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    @if($news && $news->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($news as $item)
            <div class="bg-white rounded-3xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-lg transition-all group flex flex-col justify-between">
                <div class="p-8">
                    <div class="flex items-center gap-2 text-xs font-semibold text-blue-600 mb-3">
                        <span class="px-2.5 py-1 bg-blue-50 rounded-lg">Artikel</span>
                        <span class="text-slate-400">&bull;</span>
                        <span class="text-slate-500">{{ $item->created_at ? $item->created_at->format('d M Y') : 'Hari Ini' }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors line-clamp-2">
                        {{ $item->title }}
                    </h3>
                    <p class="mt-3 text-slate-600 text-sm leading-relaxed line-clamp-4">
                        {{ strip_tags($item->content ?? $item->description ?? '') }}
                    </p>
                </div>
                <div class="px-8 pb-8 pt-2 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs text-slate-400 font-medium">Oleh: {{ $item->user->name ?? $item->author ?? 'Tim Redaksi' }}</span>
                    <span class="text-sm font-bold text-blue-600 group-hover:translate-x-1 transition-transform inline-flex items-center gap-1">
                        Baca &rarr;
                    </span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-10">
            {{ $news->links() }}
        </div>
    @else
        <div class="p-12 text-center bg-white rounded-3xl border border-slate-200/80 shadow-sm max-w-2xl mx-auto">
            <div class="w-16 h-16 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-3xl mx-auto mb-4">📰</div>
            <h3 class="text-xl font-bold text-slate-900">Belum Ada Berita</h3>
            <p class="mt-2 text-slate-500 text-sm">Berita terbaru akan segera diunggah oleh administrator.</p>
        </div>
    @endif
</div>
@endsection
