@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-black dark:text-white">Menü Entegrasyonu</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Menünüzü harici platformlarla senkronize edin</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Platform Entegrasyonu -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-black dark:text-white">Yemeksepeti</h3>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Senkronize</span>
                    <div class="w-10 h-6 bg-black dark:bg-white rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 right-1"></div>
                    </div>
                </div>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Menünüz Yemeksepeti ile otomatik senkronize ediliyor</p>
            <div class="space-y-2 text-sm">
                <div class="flex justify-between">
                    <span class="text-gray-600 dark:text-gray-400">Son senkronizasyon:</span>
                    <span class="text-black dark:text-white">2 saat önce</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-600 dark:text-gray-400">Ürün sayısı:</span>
                    <span class="text-black dark:text-white">45</span>
                </div>
            </div>
            <button class="w-full mt-4 px-4 py-2 border border-gray-300 dark:border-gray-700 text-black dark:text-white rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900">
                Manuel Senkronize Et
            </button>
        </div>

        <!-- Platform Entegrasyonu -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-black dark:text-white">Getir Yemek</h3>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Kapalı</span>
                    <div class="w-10 h-6 bg-gray-300 dark:bg-gray-700 rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 left-1"></div>
                    </div>
                </div>
            </div>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Menü senkronizasyonu aktif değil</p>
            <button class="w-full px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
                Senkronizasyonu Aç
            </button>
        </div>
    </div>
</div>
@endsection
