@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-black dark:text-white">Rol & Yetki Yönetimi</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-1">Kullanıcı rolleri ve izinleri</p>
        </div>
        <button class="px-4 py-2 bg-black dark:bg-white text-white dark:text-black font-medium rounded-lg hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors">
            Yeni Rol
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-2">Yönetici</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Tam yetki</p>
            <button class="text-sm text-black dark:text-white hover:underline">Düzenle</button>
        </div>

        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-2">Kurye</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Sipariş teslimi</p>
            <button class="text-sm text-black dark:text-white hover:underline">Düzenle</button>
        </div>

        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <h3 class="text-lg font-semibold text-black dark:text-white mb-2">Personel</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Sipariş yönetimi</p>
            <button class="text-sm text-black dark:text-white hover:underline">Düzenle</button>
        </div>
    </div>
</div>
@endsection
