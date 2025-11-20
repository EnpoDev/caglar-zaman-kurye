@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-black dark:text-white">Güvenlik Ayarları</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-1">Şifre ve güvenlik ayarlarınız</p>
        </div>
    </div>

    <!-- Şifre Değiştir -->
    <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
        <h2 class="text-xl font-semibold text-black dark:text-white mb-6">Şifre Değiştir</h2>
        <form class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-black dark:text-white mb-2">Mevcut Şifre</label>
                <input type="password"
                       class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">
            </div>

            <div>
                <label class="block text-sm font-medium text-black dark:text-white mb-2">Yeni Şifre</label>
                <input type="password"
                       class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">
            </div>

            <div>
                <label class="block text-sm font-medium text-black dark:text-white mb-2">Yeni Şifre Tekrar</label>
                <input type="password"
                       class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-black dark:bg-white text-white dark:text-black font-medium rounded-lg hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors">
                    Şifreyi Güncelle
                </button>
            </div>
        </form>
    </div>

    <!-- İki Faktörlü Doğrulama -->
    <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
        <div class="flex items-start justify-between">
            <div>
                <h2 class="text-xl font-semibold text-black dark:text-white mb-2">İki Faktörlü Doğrulama</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400">Hesabınızı daha güvenli hale getirin</p>
            </div>
            <button class="px-4 py-2 bg-gray-200 dark:bg-gray-800 text-black dark:text-white font-medium rounded-lg hover:bg-gray-300 dark:hover:bg-gray-700 transition-colors text-sm">
                Etkinleştir
            </button>
        </div>
    </div>

    <!-- Oturum Geçmişi -->
    <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
        <h2 class="text-xl font-semibold text-black dark:text-white mb-6">Oturum Geçmişi</h2>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-4 bg-gray-100 dark:bg-gray-900 rounded-lg">
                <div>
                    <p class="font-medium text-black dark:text-white">Chrome - Windows</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">İstanbul, Türkiye • Şimdi aktif</p>
                </div>
                <span class="px-2 py-1 text-xs font-medium bg-black dark:bg-white text-white dark:text-black rounded">Aktif</span>
            </div>
        </div>
    </div>
</div>
@endsection
