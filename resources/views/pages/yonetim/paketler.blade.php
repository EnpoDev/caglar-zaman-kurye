@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6 flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-black dark:text-white">Paketler</h1>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Abonelik paketlerinizi görüntüleyin</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Paket Kartı -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-2">Temel</h3>
            <div class="mb-4">
                <span class="text-3xl font-bold text-black dark:text-white">₺199</span>
                <span class="text-gray-600 dark:text-gray-400">/ay</span>
            </div>
            <ul class="space-y-2 mb-6">
                <li class="text-sm text-gray-600 dark:text-gray-400">• 100 Sipariş/ay</li>
                <li class="text-sm text-gray-600 dark:text-gray-400">• 2 Kullanıcı</li>
                <li class="text-sm text-gray-600 dark:text-gray-400">• Temel Raporlar</li>
            </ul>
            <button class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 text-black dark:text-white rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900">
                Seç
            </button>
        </div>

        <!-- Aktif Paket -->
        <div class="bg-black dark:bg-white border-2 border-black dark:border-white rounded-lg p-6">
            <h3 class="text-lg font-semibold text-white dark:text-black mb-2">Profesyonel</h3>
            <div class="mb-4">
                <span class="text-3xl font-bold text-white dark:text-black">₺399</span>
                <span class="text-gray-300 dark:text-gray-600">/ay</span>
            </div>
            <ul class="space-y-2 mb-6">
                <li class="text-sm text-gray-300 dark:text-gray-600">• Sınırsız Sipariş</li>
                <li class="text-sm text-gray-300 dark:text-gray-600">• 5 Kullanıcı</li>
                <li class="text-sm text-gray-300 dark:text-gray-600">• Gelişmiş Raporlar</li>
            </ul>
            <button class="w-full px-4 py-2 bg-white dark:bg-black text-black dark:text-white rounded-lg">
                Aktif Plan
            </button>
        </div>

        <!-- Paket Kartı -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-2">Kurumsal</h3>
            <div class="mb-4">
                <span class="text-3xl font-bold text-black dark:text-white">₺799</span>
                <span class="text-gray-600 dark:text-gray-400">/ay</span>
            </div>
            <ul class="space-y-2 mb-6">
                <li class="text-sm text-gray-600 dark:text-gray-400">• Sınırsız Sipariş</li>
                <li class="text-sm text-gray-600 dark:text-gray-400">• Sınırsız Kullanıcı</li>
                <li class="text-sm text-gray-600 dark:text-gray-400">• Özel Destek</li>
            </ul>
            <button class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 text-black dark:text-white rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900">
                Seç
            </button>
        </div>
    </div>
</div>
@endsection
