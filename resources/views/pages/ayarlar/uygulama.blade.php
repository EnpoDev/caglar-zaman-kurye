@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-black dark:text-white">Uygulama Ayarları</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Uygulama davranışlarını yapılandırın</p>
    </div>

    <div class="max-w-2xl space-y-6">
        <!-- Dil ve Bölge -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Dil ve Bölge</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Dil</label>
                    <select class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                        <option>Türkçe</option>
                        <option>English</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Saat Dilimi</label>
                    <select class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                        <option>İstanbul (GMT+3)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Para Birimi</label>
                    <select class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                        <option>Türk Lirası (₺)</option>
                        <option>Euro (€)</option>
                        <option>Dolar ($)</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Sipariş Ayarları -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Sipariş Ayarları</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Otomatik sipariş kabul</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Gelen siparişleri otomatik kabul et</p>
                    </div>
                    <div class="w-10 h-6 bg-black dark:bg-white rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 right-1"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Sesli bildirim</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Yeni sipariş geldiğinde ses çal</p>
                    </div>
                    <div class="w-10 h-6 bg-black dark:bg-white rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 right-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <button class="w-full px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
            Değişiklikleri Kaydet
        </button>
    </div>
</div>
@endsection
