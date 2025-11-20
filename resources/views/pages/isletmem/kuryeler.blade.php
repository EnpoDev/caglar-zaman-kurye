@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6 flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-black dark:text-white">Kurye Yönetimi</h1>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Kuryelerinizi yönetin ve performanslarını takip edin</p>
        </div>
        <button class="px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
            + Yeni Kurye
        </button>
    </div>

    <!-- Kurye İstatistikleri -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Toplam Kurye</p>
            <p class="text-3xl font-bold text-black dark:text-white">12</p>
        </div>
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Aktif</p>
            <p class="text-3xl font-bold text-black dark:text-white">8</p>
        </div>
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Teslimat</p>
            <p class="text-3xl font-bold text-black dark:text-white">5</p>
        </div>
        <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Müsait</p>
            <p class="text-3xl font-bold text-black dark:text-white">3</p>
        </div>
    </div>

    <!-- Kurye Listesi -->
    <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="border-b border-gray-200 dark:border-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">AD SOYAD</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">TELEFON</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">DURUM</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">GÜNLÜK TESLİMAT</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">PUAN</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">İŞLEMLER</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-900">
                        <td class="px-6 py-4 text-sm text-black dark:text-white">Mehmet Kaya</td>
                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">0532 987 65 43</td>
                        <td class="px-6 py-4 text-sm">
                            <span class="px-2 py-1 text-xs bg-black dark:bg-white text-white dark:text-black rounded">Teslimat</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-black dark:text-white">8</td>
                        <td class="px-6 py-4 text-sm text-black dark:text-white">4.8</td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-black dark:text-white hover:opacity-60 mr-3">Görüntüle</button>
                            <button class="text-black dark:text-white hover:opacity-60">Düzenle</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-900">
                        <td class="px-6 py-4 text-sm text-black dark:text-white">Ali Demir</td>
                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">0533 456 78 90</td>
                        <td class="px-6 py-4 text-sm">
                            <span class="px-2 py-1 text-xs border border-gray-300 dark:border-gray-700 rounded">Müsait</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-black dark:text-white">12</td>
                        <td class="px-6 py-4 text-sm text-black dark:text-white">4.9</td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-black dark:text-white hover:opacity-60 mr-3">Görüntüle</button>
                            <button class="text-black dark:text-white hover:opacity-60">Düzenle</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
