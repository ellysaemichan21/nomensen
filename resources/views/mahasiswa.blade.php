@extends('layouts.app')

@section('title', 'Daftar Mahasiswa - Universitas HKBP Nomensen')

@section('content')
<div class="bg-gradient-to-b from-slate-900 to-blue-950 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">Direktori Mahasiswa Berprestasi</h1>
        <p class="mt-4 text-slate-300 max-w-xl mx-auto">Civitas akademika dan mahasiswa aktif Universitas HKBP Nomensen.</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    @if($students && $students->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($students as $mhs)
            <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm flex items-center gap-4 hover:shadow-md transition-shadow">
                <div class="w-14 h-14 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xl shrink-0">
                    {{ substr($mhs->name, 0, 1) }}
                </div>
                <div>
                    <h3 class="font-bold text-slate-900">{{ $mhs->name }}</h3>
                    <span class="text-xs text-slate-500 font-mono block mt-0.5">NIM: {{ $mhs->nim ?? 'Aktif' }}</span>
                    <span class="inline-block mt-2 text-xs font-semibold px-2.5 py-0.5 bg-emerald-50 text-emerald-700 rounded-md">
                        {{ $mhs->major ?? $mhs->jurusan ?? 'Mahasiswa Aktif' }}
                    </span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-10">
            {{ $students->links() }}
        </div>
    @else
        <div class="p-12 text-center bg-white rounded-3xl border border-slate-200/80 shadow-sm max-w-2xl mx-auto">
            <div class="w-16 h-16 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-3xl mx-auto mb-4">🎓</div>
            <h3 class="text-xl font-bold text-slate-900">Belum Ada Data Mahasiswa</h3>
            <p class="mt-2 text-slate-500 text-sm">Data mahasiswa aktif dapat dikelola melalui admin portal.</p>
        </div>
    @endif
</div>
@endsection
