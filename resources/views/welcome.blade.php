<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Tailwind v4</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="min-h-screen bg-slate-950 flex items-center justify-center p-6 relative overflow-hidden">
    <!-- Ambient glowing backgrounds -->
    <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-600/30 rounded-full blur-3xl pointer-events-none animate-pulse"></div>
    <div class="absolute bottom-1/4 right-1/4 translate-x-1/2 translate-y-1/2 w-96 h-96 bg-indigo-600/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-3xl w-full mx-auto p-12 bg-white/95 backdrop-blur-xl rounded-3xl shadow-[0_20px_60px_-15px_rgba(37,63,235,0.25)] border border-white/20 text-center transition-all duration-300 hover:shadow-[0_25px_70px_-15px_rgba(37,63,235,0.35)] hover:-translate-y-1 group">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 border border-blue-200/60 text-blue-700 text-sm font-semibold mb-8 shadow-sm">
            <span class="w-2.5 h-2.5 rounded-full bg-blue-600 animate-ping inline-block"></span>
            <span class="w-2.5 h-2.5 rounded-full bg-blue-600 inline-block absolute"></span>
            Tailwind CSS v4 Engine Status: Active
        </div>

        <!-- Heading -->
        <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-700 bg-clip-text text-transparent mb-6 drop-shadow-sm">
            Tailwind v4 Berjalan!
        </h1>

        <!-- Description -->
        <p class="text-lg sm:text-xl text-slate-600 font-medium max-w-2xl mx-auto leading-relaxed mt-3">
            Jika kamu melihat tampilan ini dengan warna biru dan rounded card, berarti Tailwind sudah aktif.
        </p>

        <!-- Decorative UI footer bar inside card -->
        <div class="mt-10 pt-8 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-semibold text-slate-400">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                <span>Vite Hot Module Replacement (HMR) Ready</span>
            </div>
            <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg">Laravel 11 x Tailwind v4</span>
        </div>
    </div>
</body>
</html>
