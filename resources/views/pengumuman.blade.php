@extends('layouts.app')

@section('title', 'Pengumuman Kampus - Universitas HKBP Nomensen')

@section('content')
<div class="bg-gradient-to-b from-slate-900 to-blue-950 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">Pengumuman & Informasi Kampus</h1>
        <p class="mt-4 text-slate-300 max-w-xl mx-auto">Pengumuman resmi terkait kegiatan akademik dan kemahasiswaan.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    @if($announcements && $announcements->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($announcements as $info)
            <div class="bg-white rounded-3xl p-8 border border-slate-200/80 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-50 text-amber-700 text-xs font-bold border border-amber-200/60">
                            📢 Pengumuman
                        </span>
                        <span class="text-xs text-slate-400">{{ $info->created_at ? $info->created_at->format('d M Y') : 'Terbaru' }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $info->title }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ strip_tags($info->content ?? $info->description ?? '') }}</p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-slate-500">
                    <span>Oleh: {{ $info->author ?? 'Admin Kampus' }}</span>
                    <span class="text-blue-600">Penting</span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-10">
            {{ $announcements->links() }}
        </div>
    @else
        <div class="p-12 text-center bg-white rounded-3xl border border-slate-200/80 shadow-sm max-w-2xl mx-auto">
            <div class="w-16 h-16 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center text-3xl mx-auto mb-4">📢</div>
            <h3 class="text-xl font-bold text-slate-900">Belum Ada Pengumuman</h3>
            <p class="mt-2 text-slate-500 text-sm">Saat ini belum ada pengumuman terbaru dari pimpinan kampus.</p>
        </div>
    @endif
</div>
@endsection
