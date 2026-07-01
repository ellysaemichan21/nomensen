@extends('layouts.app')

@section('title', 'Beranda - Universitas HKBP Nomensen')

@section('content')
<!-- Hero Banner Section -->
<div class="relative bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900 text-white overflow-hidden py-24 sm:py-32">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(59,130,246,0.2),transparent_50%)]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-500/10 border border-blue-400/30 text-blue-300 text-xs font-semibold mb-6">
            ✨ Penerimaan Mahasiswa Baru Telah Dibuka
        </div>
        <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight max-w-4xl mx-auto leading-tight">
            Mewujudkan Unggulan Akademik Berlandaskan <span class="bg-gradient-to-r from-blue-400 to-indigo-300 bg-clip-text text-transparent">Inovasi & Karakter</span>
        </h1>
        <p class="mt-6 text-lg sm:text-xl text-slate-300 max-w-2xl mx-auto leading-relaxed">
            Selamat datang di portal resmi Universitas HKBP Nomensen. Pusat keunggulan riset, teknologi, dan kepemimpinan masa depan.
        </p>
        <div class="mt-10 flex flex-wrap justify-center gap-4">
            <a href="{{ route('profil') }}" class="px-8 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm shadow-lg shadow-blue-500/30 transition-all transform hover:-translate-y-0.5">
                Jelajahi Profil Kampus
            </a>
            <a href="{{ route('dosen') }}" class="px-8 py-3.5 rounded-xl bg-white/10 hover:bg-white/20 text-white border border-white/20 font-bold text-sm transition-all">
                Daftar Dosen
            </a>
        </div>
    </div>
</div>

<!-- Sambutan Rektor Section -->
<div class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Sambutan & Kata Pengantar</h2>
            <p class="mt-3 text-slate-600">Pesan hangat dari pimpinan Universitas HKBP Nomensen</p>
        </div>

        @if($greetings && $greetings->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($greetings as $item)
                <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="text-blue-600 mb-4">
                            <svg class="w-10 h-10 opacity-40" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $item->title ?? 'Sambutan Rektor' }}</h3>
                        <p class="text-slate-600 leading-relaxed text-sm line-clamp-4">{{ $item->content ?? $item->description }}</p>
                    </div>
                    <div class="mt-6 pt-6 border-t border-slate-200/60 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 font-bold flex items-center justify-center">R</div>
                        <div>
                            <span class="block font-bold text-sm text-slate-900">{{ $item->author ?? 'Pimpinan Kampus' }}</span>
                            <span class="block text-xs text-slate-500">Universitas HKBP Nomensen</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="p-12 text-center rounded-3xl bg-slate-50 border border-dashed border-slate-300 max-w-3xl mx-auto">
                <p class="text-slate-500 font-medium">Belum ada data sambutan. Silakan tambahkan melalui halaman Admin Filament.</p>
            </div>
        @endif
    </div>
</div>

<!-- Fasilitas Kampus Section -->
<div class="py-20 bg-slate-50 border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Fasilitas Unggulan</h2>
                <p class="mt-2 text-slate-600">Dukungan infrastruktur modern untuk pengembangan potensi mahasiswa.</p>
            </div>
        </div>

        @if($facilities && $facilities->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($facilities as $f)
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-xl mb-4">
                        🏫
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $f->name ?? $f->title }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ $f->description ?? 'Fasilitas memadai dan berstandar nasional.' }}</p>
                </div>
                @endforeach
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-xl mb-4">📚</div>
                    <h3 class="text-lg font-bold text-slate-900">Perpustakaan Digital</h3>
                    <p class="mt-2 text-sm text-slate-600">Akses ribuan jurnal ilmiah dan buku digital gratis dari seluruh dunia.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-xl mb-4">🔬</div>
                    <h3 class="text-lg font-bold text-slate-900">Laboratorium Terpadu</h3>
                    <p class="mt-2 text-sm text-slate-600">Fasilitas praktikum dengan perangkat mutakhir berstandar industri.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-xl mb-4">🌐</div>
                    <h3 class="text-lg font-bold text-slate-900">Wi-Fi & Kampus Digital</h3>
                    <p class="mt-2 text-sm text-slate-600">Koneksi internet berkecepatan tinggi di seluruh area lingkungan kampus.</p>
                </div>
            </div>
        @endif
    </div>
</div>

<!-- Berita Terbaru Section -->
<div class="py-20 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-12">
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Berita & Artikel Terkini</h2>
                <p class="mt-2 text-slate-600">Ikuti perkembangan aktivitas dan prestasi terbaru civitas akademika.</p>
            </div>
            <a href="{{ route('berita') }}" class="hidden sm:inline-flex items-center gap-2 font-bold text-sm text-blue-600 hover:text-blue-700">
                Lihat Semua Berita &rarr;
            </a>
        </div>

        @if($latestNews && $latestNews->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($latestNews as $news)
                <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-lg transition-all group flex flex-col justify-between">
                    <div class="p-6">
                        <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider">{{ $news->created_at ? $news->created_at->format('d M Y') : 'Berita' }}</span>
                        <h3 class="mt-2 text-lg font-bold text-slate-900 group-hover:text-blue-600 transition-colors line-clamp-2">
                            {{ $news->title }}
                        </h3>
                        <p class="mt-3 text-sm text-slate-600 line-clamp-3 leading-relaxed">
                            {{ strip_tags($news->content ?? $news->description ?? '') }}
                        </p>
                    </div>
                    <div class="px-6 pb-6 pt-2">
                        <a href="{{ route('berita') }}" class="text-sm font-bold text-blue-600 hover:underline">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="p-12 text-center rounded-3xl bg-slate-50 border border-dashed border-slate-300">
                <p class="text-slate-500 font-medium">Belum ada berita terbaru.</p>
            </div>
        @endif
    </div>
</div>
@endsection
