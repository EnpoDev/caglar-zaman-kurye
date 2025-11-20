@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-black dark:text-white">Gelişmiş İstatistikler</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-1">Dashboard, gelir ve performans metrikleri</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <div class="flex items-center justify-between mb-4">
                <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">Toplam Gelir</p>
                <div class="p-2 bg-black dark:bg-white rounded-lg">
                    <svg class="w-5 h-5 text-white dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-black dark:text-white">₺45,231</p>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Bu ay</p>
        </div>

        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <div class="flex items-center justify-between mb-4">
                <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">Sipariş Sayısı</p>
                <div class="p-2 bg-black dark:bg-white rounded-lg">
                    <svg class="w-5 h-5 text-white dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-black dark:text-white">1,234</p>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Bu ay</p>
        </div>

        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <div class="flex items-center justify-between mb-4">
                <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">Ortalama Sepet</p>
                <div class="p-2 bg-black dark:bg-white rounded-lg">
                    <svg class="w-5 h-5 text-white dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-black dark:text-white">₺98.50</p>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Ortalama</p>
        </div>

        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <div class="flex items-center justify-between mb-4">
                <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">Tamamlanma</p>
                <div class="p-2 bg-black dark:bg-white rounded-lg">
                    <svg class="w-5 h-5 text-white dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
            <p class="text-2xl font-bold text-black dark:text-white">28dk</p>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Ortalama süre</p>
        </div>
    </div>

    <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
        <h2 class="text-xl font-semibold text-black dark:text-white mb-4">Gelir Grafiği</h2>
        <div class="h-64 flex items-center justify-center border border-gray-200 dark:border-gray-800 rounded-lg">
            <p class="text-gray-600 dark:text-gray-400">Grafik buraya gelecek (Chart.js / ApexCharts)</p>
        </div>
    </div>
</div>
@endsection
