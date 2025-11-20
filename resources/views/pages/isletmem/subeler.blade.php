@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-black dark:text-white">Şube Yönetimi</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-1">İşletme şubelerinizi yönetin</p>
        </div>
        <button class="px-4 py-2 bg-black dark:bg-white text-white dark:text-black font-medium rounded-lg hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors">
            Yeni Şube
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <div class="flex items-start justify-between mb-4">
                <div>
                    <h3 class="text-lg font-semibold text-black dark:text-white">Kadıköy Şubesi</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Ana Şube</p>
                </div>
                <span class="px-2 py-1 text-xs font-medium bg-black dark:bg-white text-white dark:text-black rounded">Aktif</span>
            </div>
            <div class="space-y-2 text-sm">
                <p class="text-gray-600 dark:text-gray-400">📍 Kadıköy, İstanbul</p>
                <p class="text-gray-600 dark:text-gray-400">📞 +90 (555) 123-4567</p>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-800">
                <button class="text-sm text-black dark:text-white hover:underline">Düzenle</button>
            </div>
        </div>

        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <div class="flex items-start justify-between mb-4">
                <div>
                    <h3 class="text-lg font-semibold text-black dark:text-white">Beşiktaş Şubesi</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Şube</p>
                </div>
                <span class="px-2 py-1 text-xs font-medium bg-black dark:bg-white text-white dark:text-black rounded">Aktif</span>
            </div>
            <div class="space-y-2 text-sm">
                <p class="text-gray-600 dark:text-gray-400">📍 Beşiktaş, İstanbul</p>
                <p class="text-gray-600 dark:text-gray-400">📞 +90 (555) 765-4321</p>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-800">
                <button class="text-sm text-black dark:text-white hover:underline">Düzenle</button>
            </div>
        </div>
    </div>
</div>
@endsection
