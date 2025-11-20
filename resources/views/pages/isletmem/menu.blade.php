@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6 flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-black dark:text-white">Menü Yönetimi</h1>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Menü ürünlerinizi düzenleyin</p>
        </div>
        <button class="px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
            + Yeni Kategori
        </button>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
        <!-- Kategoriler -->
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-4">
            <h3 class="text-sm font-semibold text-black dark:text-white mb-3">Kategoriler</h3>
            <div class="space-y-2">
                <div class="p-3 bg-black dark:bg-white text-white dark:text-black rounded-lg cursor-pointer">
                    Ana Yemekler
                </div>
                <div class="p-3 border border-gray-200 dark:border-gray-800 rounded-lg cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-900">
                    İçecekler
                </div>
                <div class="p-3 border border-gray-200 dark:border-gray-800 rounded-lg cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-900">
                    Tatlılar
                </div>
            </div>
        </div>

        <!-- Ürünler -->
        <div class="lg:col-span-3">
            <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-black dark:text-white">Ana Yemekler</h3>
                    <button class="px-3 py-1 text-sm bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
                        + Ürün Ekle
                    </button>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-4 border border-gray-200 dark:border-gray-800 rounded-lg">
                        <div>
                            <p class="font-medium text-black dark:text-white">Izgara Tavuk</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Lezzetli ızgara tavuk</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="text-lg font-semibold text-black dark:text-white">₺85.00</span>
                            <button class="text-black dark:text-white hover:opacity-60">Düzenle</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
