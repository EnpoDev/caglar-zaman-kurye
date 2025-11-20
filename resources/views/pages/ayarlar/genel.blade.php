@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-black dark:text-white">Genel Ayarlar</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Temel sistem ayarlarınızı yapılandırın</p>
    </div>

    <div class="max-w-2xl">
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6 mb-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">İşletme Bilgileri</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">İşletme Adı</label>
                    <input type="text" value="Irmak Fırın & Cafe" class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                </div>
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Telefon</label>
                    <input type="tel" value="0212 555 55 55" class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                </div>
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">E-posta</label>
                    <input type="email" value="info@irmakfirin.com" class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                </div>
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Adres</label>
                    <textarea rows="3" class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">Kadıköy Mah. Test Sokak No:1 İstanbul</textarea>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6 mb-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Çalışma Saatleri</h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <span class="text-sm text-black dark:text-white">Pazartesi - Cuma</span>
                    <div class="flex items-center space-x-2">
                        <input type="time" value="09:00" class="px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white text-sm">
                        <span class="text-gray-600 dark:text-gray-400">-</span>
                        <input type="time" value="22:00" class="px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white text-sm">
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
