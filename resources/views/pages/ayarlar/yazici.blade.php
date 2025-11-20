@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6 flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-black dark:text-white">Yazıcı Yönetimi</h1>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Yazıcı ayarlarınızı yapılandırın</p>
        </div>
        <button class="px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
            + Yazıcı Ekle
        </button>
    </div>

    <div class="max-w-2xl space-y-6">
        <!-- Yazıcı Listesi -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Tanımlı Yazıcılar</h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-4 border border-gray-200 dark:border-gray-800 rounded-lg">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Mutfak Yazıcısı</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Epson TM-T88V (192.168.1.100)</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="px-2 py-1 text-xs bg-black dark:bg-white text-white dark:text-black rounded">Aktif</span>
                        <button class="text-black dark:text-white hover:opacity-60">Test</button>
                        <button class="text-black dark:text-white hover:opacity-60">Düzenle</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Yazdırma Ayarları -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Yazdırma Ayarları</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Otomatik yazdırma</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Yeni sipariş geldiğinde otomatik yazdır</p>
                    </div>
                    <div class="w-10 h-6 bg-black dark:bg-white rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 right-1"></div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Kopya sayısı</label>
                    <input type="number" value="2" class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                </div>
            </div>
        </div>

        <button class="w-full px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
            Değişiklikleri Kaydet
        </button>
    </div>
</div>
@endsection
