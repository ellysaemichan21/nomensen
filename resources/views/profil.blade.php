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
        @if($aboutmes && $aboutmes->count() > 0)
            @foreach($aboutmes as $item)
                <div class="prose max-w-none text-slate-600 leading-relaxed space-y-4">
                    <h3 class="text-xl font-bold text-slate-800">{{ $item->title ?? '' }}</h3>
                    <p>{{ $item->content ?? $item->description }}</p>
                </div>
            @endforeach
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
                Menjadi universitas unggul dan berdaya saing internasional dalam pengembangan ilmu pengetahuan, teknologi, dan seni yang berlandaskan kasih serta kebenaran.
            </p>
        </div>
        <div class="bg-slate-900 text-white p-8 sm:p-10 rounded-3xl shadow-lg">
            <h3 class="text-2xl font-extrabold mb-4">🚀 Misi Kampus</h3>
            <ul class="space-y-3 text-slate-300 list-disc list-inside">
                <li>Menyelenggarakan pendidikan dan pengajaran berkualitas tinggi.</li>
                <li>Melaksanakan penelitian yang inovatif dan bermanfaat bagi masyarakat.</li>
                <li>Melakukan pengabdian kepada masyarakat berbasis penerapan IPTEKS.</li>
                <li>Membentuk karakter mahasiswa beretika mulia dan profesional.</li>
            </ul>
        </div>
    </div>

    <!-- Sejarah Kampus -->
    <div class="bg-white p-8 sm:p-12 rounded-3xl border border-slate-200/80 shadow-sm">
        <h2 class="text-2xl font-extrabold text-slate-900 mb-6">Sejarah Singkat</h2>
        @if($histories && $histories->count() > 0)
            @foreach($histories as $history)
                <div class="mb-6 last:mb-0">
                    <span class="text-sm font-bold text-blue-600">{{ $history->year ?? 'Tahun Berdiri' }}</span>
                    <h4 class="text-lg font-bold text-slate-900 mt-1">{{ $history->title }}</h4>
                    <p class="text-slate-600 mt-2 text-sm leading-relaxed">{{ $history->description ?? $history->content }}</p>
                </div>
            @endforeach
        @else
            <p class="text-slate-600 leading-relaxed text-sm">
                Sejak didirikan pada puluhan tahun silam, Universitas HKBP Nomensen terus berkembang dan memperluas jaringan kerjasama baik nasional maupun internasional untuk menunjang mutu pendidikan mahasiswa.
            </p>
        @endif
    </div>
</div>
@endsection
