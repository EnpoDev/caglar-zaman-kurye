@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-black dark:text-white">Ödeme Yöntemleri</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Kabul ettiğiniz ödeme yöntemlerini yapılandırın</p>
    </div>

    <div class="max-w-2xl space-y-6">
        <!-- Ödeme Yöntemleri -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Kabul Edilen Ödeme Yöntemleri</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 border border-gray-200 dark:border-gray-800 rounded-lg">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Nakit</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Kapıda nakit ödeme</p>
                    </div>
                    <div class="w-10 h-6 bg-black dark:bg-white rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 right-1"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-4 border border-gray-200 dark:border-gray-800 rounded-lg">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Kredi Kartı</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Online kredi kartı ödemesi</p>
                    </div>
                    <div class="w-10 h-6 bg-black dark:bg-white rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 right-1"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between p-4 border border-gray-200 dark:border-gray-800 rounded-lg">
                    <div>
                        <p class="text-sm font-medium text-black dark:text-white">Kapıda Kredi Kartı</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">Teslimat sırasında POS ile ödeme</p>
                    </div>
                    <div class="w-10 h-6 bg-gray-300 dark:bg-gray-700 rounded-full relative">
                        <div class="w-4 h-4 bg-white dark:bg-black rounded-full absolute top-1 left-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ödeme Sağlayıcı -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Ödeme Sağlayıcı</h3>
            <div>
                <label class="block text-sm font-medium text-black dark:text-white mb-2">Ödeme Sağlayıcısı Seçin</label>
                <select class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                    <option>İyzico</option>
                    <option>PayTR</option>
                    <option>Stripe</option>
                </select>
            </div>
        </div>

        <button class="w-full px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
            Değişiklikleri Kaydet
        </button>
    </div>
</div>
@endsection
