@extends('layouts.app')

@section('title', 'Profil Kampus - Universitas HKBP Nomensen')

@section('content')
<div class="bg-gradient-to-b from-slate-900 to-blue-950 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">Profil Universitas HKBP Nomensen</h1>
        <p class="mt-4 text-slate-300 max-w-2xl mx-auto text-lg">Sejarah, Visi Misi, dan Kepemimpinan Universitas HKBP Nomensen</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">
    <!-- Tentang Kami -->
    <div class="bg-white p-8 sm:p-12 rounded-3xl border border-slate-200/80 shadow-sm">
        <h2 class="text-2xl font-extrabold text-slate-900 mb-4">Tentang Universitas</h2>
        @if($aboutme)
            <div class="prose max-w-none text-slate-600 leading-relaxed space-y-4">
                <h3 class="text-xl font-bold text-slate-800">{{ $aboutme->title ?? '' }}</h3>
                <p>{{ $aboutme->content ?? $aboutme->description }}</p>
            </div>
        @else
            <p class="text-slate-600 leading-relaxed">
                Universitas HKBP Nomensen adalah lembaga pendidikan tinggi kristen terkemuka yang didirikan dengan semangat pengabdian dan pelayanan. Kami berkomitmen mencetak lulusan berintegritas tinggi, unggul secara akademis, dan siap bersaing di kancah global.
            </p>
        @endif
    </div>

    <!-- Visi & Misi -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-blue-600 text-white p-8 sm:p-10 rounded-3xl shadow-lg shadow-blue-500/20">
            <h3 class="text-2xl font-extrabold mb-4">🎯 Visi Kampus</h3>
            <p class="text-blue-100 leading-relaxed">
                {{ $visimisi->visi ?? 'Menjadi universitas unggul dan berdaya saing internasional dalam pengembangan ilmu pengetahuan, teknologi, dan seni yang berlandaskan kasih serta kebenaran.' }}
            </p>
        </div>
        <div class="bg-slate-900 text-white p-8 sm:p-10 rounded-3xl shadow-lg">
            <h3 class="text-2xl font-extrabold mb-4">🚀 Misi Kampus</h3>
            <p class="text-slate-300 leading-relaxed whitespace-pre-line">
                {{ $visimisi->misi ?? "• Menyelenggarakan pendidikan dan pengajaran berkualitas tinggi.\n• Melaksanakan penelitian yang inovatif dan bermanfaat bagi masyarakat.\n• Melakukan pengabdian kepada masyarakat berbasis penerapan IPTEKS.\n• Membentuk karakter mahasiswa beretika mulia dan profesional." }}
            </p>
        </div>
    </div>

    <!-- Sejarah Singkat -->
    <div class="bg-white p-8 sm:p-12 rounded-3xl border border-slate-200/80 shadow-sm">
        <h2 class="text-2xl font-extrabold text-slate-900 mb-6">Sejarah Kampus</h2>
        @if($history)
            <div>
                <h4 class="text-lg font-bold text-slate-900 mt-1">{{ $history->title ?? 'Sejarah Berdirinya Kampus' }}</h4>
                <p class="text-slate-600 mt-2 text-sm leading-relaxed whitespace-pre-line">{{ $history->description ?? $history->content }}</p>
            </div>
        @else
            <p class="text-slate-600 leading-relaxed text-sm">
                Sejak didirikan pada puluhan tahun silam, Universitas HKBP Nomensen terus berkembang dan memperluas jaringan kerjasama baik nasional maupun internasional untuk menunjang mutu pendidikan mahasiswa.
            </p>
        @endif
    </div>

    <!-- Pimpinan / Rektorat -->
    @if($rektors && $rektors->count() > 0)
    <div>
        <h2 class="text-2xl font-extrabold text-slate-900 mb-6 text-center">Pimpinan Universitas</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach($rektors as $rektor)
            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm text-center">
                <div class="w-20 h-20 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xl mx-auto mb-4">👑</div>
                <h3 class="font-bold text-slate-900">{{ $rektor->nama ?? $rektor->name }}</h3>
                <span class="text-xs text-blue-600 font-semibold block mt-1">{{ $rektor->jabatan ?? 'Pimpinan Kampus' }}</span>
                <p class="mt-2 text-xs text-slate-500">{{ $rektor->periode ?? '' }}</p>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection
