@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-black dark:text-white">Entegrasyonlar</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Harici servis entegrasyonlarınızı yönetin</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Entegrasyon Kartı -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-black dark:text-white">Yemeksepeti</h3>
                <span class="px-2 py-1 text-xs border border-gray-300 dark:border-gray-700 rounded">Aktif Değil</span>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Yemeksepeti siparişlerini otomatik alın</p>
            <button class="w-full px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
                Bağlan
            </button>
        </div>

        <!-- Entegrasyon Kartı -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-black dark:text-white">Getir Yemek</h3>
                <span class="px-2 py-1 text-xs border border-gray-300 dark:border-gray-700 rounded">Aktif Değil</span>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Getir Yemek siparişlerini otomatik alın</p>
            <button class="w-full px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
                Bağlan
            </button>
        </div>

        <!-- Entegrasyon Kartı -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-black dark:text-white">Trendyol Yemek</h3>
                <span class="px-2 py-1 text-xs border border-gray-300 dark:border-gray-700 rounded">Aktif Değil</span>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Trendyol Yemek siparişlerini otomatik alın</p>
            <button class="w-full px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
                Bağlan
            </button>
        </div>
    </div>
</div>
@endsection
