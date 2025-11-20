@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-black dark:text-white">Menü Yönetimi</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-1">Ürün ve kategorilerinizi yönetin</p>
        </div>
        <button class="px-4 py-2 bg-black dark:bg-white text-white dark:text-black font-medium rounded-lg hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors">
            Yeni Ürün
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">Toplam Ürün</p>
            <p class="text-3xl font-bold text-black dark:text-white mt-2">156</p>
        </div>

        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">Kategoriler</p>
            <p class="text-3xl font-bold text-black dark:text-white mt-2">12</p>
        </div>

        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">Aktif</p>
            <p class="text-3xl font-bold text-black dark:text-white mt-2">142</p>
        </div>

        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">Stokta Yok</p>
            <p class="text-3xl font-bold text-black dark:text-white mt-2">14</p>
        </div>
    </div>

    <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800">
        <div class="p-6 border-b border-gray-200 dark:border-gray-800">
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Ürün ara..."
                       class="flex-1 px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-sm text-black dark:text-white placeholder-gray-500 focus:outline-none focus:border-black dark:focus:border-white">
                <select class="px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-sm text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">
                    <option>Tüm Kategoriler</option>
                    <option>Burger</option>
                    <option>Pizza</option>
                    <option>İçecek</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
            <div class="border border-gray-200 dark:border-gray-800 rounded-lg p-4">
                <div class="aspect-video bg-gray-200 dark:bg-gray-800 rounded-lg mb-4"></div>
                <h3 class="font-semibold text-black dark:text-white mb-1">Cheeseburger</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Klasik burger</p>
                <p class="text-lg font-bold text-black dark:text-white">₺45.00</p>
            </div>
        </div>
    </div>
</div>
@endsection
