@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-black dark:text-white">Yazarkasa Ayarları</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Mali entegrasyon ayarlarını yapılandırın</p>
    </div>

    <div class="max-w-2xl space-y-6">
        <!-- Yazarkasa Entegrasyonu -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Yazarkasa Bağlantısı</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 border border-gray-200 dark:border-gray-800 rounded-lg">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Yazarkasa Entegrasyonu</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Siparişleri otomatik yazarkasaya aktar</p>
                    </div>
                    <div class="w-10 h-6 bg-gray-300 dark:bg-gray-700 rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 left-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Yazarkasa Ayarları -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Cihaz Ayarları</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Yazarkasa Modeli</label>
                    <select class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                        <option>Seçiniz...</option>
                        <option>Hugin</option>
                        <option>Olivetti</option>
                        <option>Custom</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Bağlantı Türü</label>
                    <select class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                        <option>Seri Port (COM)</option>
                        <option>Ethernet</option>
                        <option>USB</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Port / IP Adresi</label>
                    <input type="text" placeholder="COM1 veya 192.168.1.50" class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white placeholder-gray-500">
                </div>
            </div>
        </div>

        <!-- KDV Ayarları -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">KDV Ayarları</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Varsayılan KDV Oranı</label>
                    <select class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                        <option>%20</option>
                        <option>%18</option>
                        <option>%10</option>
                        <option>%8</option>
                        <option>%1</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="flex gap-3">
            <button class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-700 text-black dark:text-white rounded-lg hover:bg-gray-50 dark:hover:bg-gray-900">
                Bağlantıyı Test Et
            </button>
            <button class="flex-1 px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
                Kaydet
            </button>
        </div>
    </div>
</div>
@endsection
