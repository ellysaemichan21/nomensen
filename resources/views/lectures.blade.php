@extends('layouts.app')

@section('title', 'Direktori Dosen - Universitas HKBP Nomensen')

@section('content')
<div class="bg-gradient-to-b from-slate-900 to-blue-950 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">Direktori Tenaga Pengajar</h1>
        <p class="mt-4 text-slate-300 max-w-xl mx-auto">Dosen profesional dan kompeten di bidang keilmuannya masing-masing.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    @if($lectures && $lectures->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($lectures as $dosen)
            <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm hover:shadow-lg transition-all text-center flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-white flex items-center justify-center font-extrabold text-2xl shadow-md mb-4">
                    {{ substr($dosen->nama ?? $dosen->name, 0, 2) }}
                </div>
                <h3 class="text-lg font-bold text-slate-900">{{ $dosen->nama ?? $dosen->name }}</h3>
                <span class="inline-block mt-1 px-3 py-1 bg-blue-50 text-blue-700 font-semibold text-xs rounded-full">
                    {{ $dosen->nidn ?? 'Dosen Tetap' }}
                </span>
                <p class="mt-3 text-sm text-slate-500 line-clamp-2">
                    {{ $dosen->jabatan ?? $dosen->pendidikan ?? 'Tenaga Pengajar Akademik' }}
                </p>
            </div>
            @endforeach
        </div>
        <div class="mt-10">
            {{ $lectures->links() }}
        </div>
    @else
        <div class="p-12 text-center bg-white rounded-3xl border border-slate-200/80 shadow-sm max-w-2xl mx-auto">
            <div class="w-16 h-16 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-3xl mx-auto mb-4">👨‍🏫</div>
            <h3 class="text-xl font-bold text-slate-900">Belum Ada Data Dosen</h3>
            <p class="mt-2 text-slate-500 text-sm">Data dosen akan segera diperbarui melalui panel admin.</p>
        </div>
    @endif
</div>
@endsection
