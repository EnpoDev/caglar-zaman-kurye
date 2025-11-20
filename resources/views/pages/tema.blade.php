@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-black dark:text-white">Tema Yapılandırması</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Görünüm ve tema ayarlarınızı özelleştirin</p>
    </div>

    <div class="max-w-2xl space-y-6">
        <!-- Tema Modu -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Tema Modu</h3>
            <div class="grid grid-cols-3 gap-4">
                <button class="p-4 border-2 border-black dark:border-white rounded-lg bg-white text-black">
                    <div class="mb-2 text-2xl">☀️</div>
                    <p class="text-sm font-medium">Açık Mod</p>
                </button>
                <button class="p-4 border border-gray-300 dark:border-gray-700 rounded-lg bg-white dark:bg-[#181818] text-black dark:text-white hover:border-black dark:hover:border-white">
                    <div class="mb-2 text-2xl">🌙</div>
                    <p class="text-sm font-medium">Koyu Mod</p>
                </button>
                <button class="p-4 border border-gray-300 dark:border-gray-700 rounded-lg bg-white dark:bg-[#181818] text-black dark:text-white hover:border-black dark:hover:border-white">
                    <div class="mb-2 text-2xl">⚙️</div>
                    <p class="text-sm font-medium">Sistem</p>
                </button>
            </div>
        </div>

        <!-- Görünüm Ayarları -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Görünüm Ayarları</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Kompakt mod</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Daha az boşluk kullan</p>
                    </div>
                    <div class="w-10 h-6 bg-gray-300 dark:bg-gray-700 rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 left-1"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Animasyonlar</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Geçiş animasyonlarını göster</p>
                    </div>
                    <div class="w-10 h-6 bg-black dark:bg-white rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 right-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Ayarları -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Sidebar Ayarları</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Otomatik gizle</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Küçük ekranlarda otomatik gizle</p>
                    </div>
                    <div class="w-10 h-6 bg-black dark:bg-white rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 right-1"></div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Sidebar Genişliği</label>
                    <select class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                        <option>Dar</option>
                        <option selected>Normal</option>
                        <option>Geniş</option>
                    </select>
                </div>
            </div>
        </div>

        <button class="w-full px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
            Değişiklikleri Kaydet
        </button>
    </div>
</div>
@endsection
