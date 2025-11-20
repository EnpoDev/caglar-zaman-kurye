@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-black dark:text-white">Bildirim Ayarları</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Bildirim tercihlerinizi yönetin</p>
    </div>

    <div class="max-w-2xl space-y-6">
        <!-- Sipariş Bildirimleri -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Sipariş Bildirimleri</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Yeni sipariş bildirimi</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Yeni sipariş geldiğinde bildirim al</p>
                    </div>
                    <div class="w-10 h-6 bg-black dark:bg-white rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 right-1"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Sipariş durumu değişikliği</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Sipariş durumu değiştiğinde bildirim al</p>
                    </div>
                    <div class="w-10 h-6 bg-black dark:bg-white rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 right-1"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">İptal edilen siparişler</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Sipariş iptal edildiğinde bildirim al</p>
                    </div>
                    <div class="w-10 h-6 bg-black dark:bg-white rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 right-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- E-posta Bildirimleri -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">E-posta Bildirimleri</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Günlük özet</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Her gün sonunda özet rapor al</p>
                    </div>
                    <div class="w-10 h-6 bg-black dark:bg-white rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 right-1"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Haftalık rapor</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Haftalık performans raporu al</p>
                    </div>
                    <div class="w-10 h-6 bg-gray-300 dark:bg-gray-700 rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 left-1"></div>
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
