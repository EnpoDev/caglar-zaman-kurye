@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-black dark:text-white">Aktif Siparişler</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-1">Hazırlanıyor ve yolda olan siparişler</p>
        </div>
        <button class="px-4 py-2 bg-black dark:bg-white text-white dark:text-black font-medium rounded-lg hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors">
            Yeni Sipariş
        </button>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">Hazırlanıyor</p>
                    <p class="text-3xl font-bold text-black dark:text-white mt-2">8</p>
                </div>
                <div class="p-3 bg-black dark:bg-white rounded-lg">
                    <svg class="w-8 h-8 text-white dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">Yolda</p>
                    <p class="text-3xl font-bold text-black dark:text-white mt-2">12</p>
                </div>
                <div class="p-3 bg-black dark:bg-white rounded-lg">
                    <svg class="w-8 h-8 text-white dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 font-medium">Toplam</p>
                    <p class="text-3xl font-bold text-black dark:text-white mt-2">20</p>
                </div>
                <div class="p-3 bg-black dark:bg-white rounded-lg">
                    <svg class="w-8 h-8 text-white dark:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Orders List -->
    <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800">
        <div class="p-6 border-b border-gray-200 dark:border-gray-800">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-black dark:text-white">Sipariş Listesi</h2>
                <div class="flex items-center space-x-2">
                    <input type="text" placeholder="Sipariş ara..."
                           class="px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-sm text-black dark:text-white placeholder-gray-500 focus:outline-none focus:border-black dark:focus:border-white">
                </div>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-100 dark:bg-gray-900">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400 uppercase tracking-wider">Sipariş No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400 uppercase tracking-wider">Müşteri</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400 uppercase tracking-wider">Adres</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400 uppercase tracking-wider">Durum</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400 uppercase tracking-wider">Kurye</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400 uppercase tracking-wider">Tutar</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400 uppercase tracking-wider">İşlem</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black dark:text-white">#12345</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">Ahmet Yılmaz</td>
                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Kadıköy, İstanbul</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-medium bg-black dark:bg-white text-white dark:text-black rounded">Yolda</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">Mehmet K.</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black dark:text-white">₺125.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <button class="text-black dark:text-white hover:underline">Detay</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black dark:text-white">#12344</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">Ayşe Demir</td>
                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Beşiktaş, İstanbul</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-medium bg-gray-200 dark:bg-gray-800 text-black dark:text-white rounded">Hazırlanıyor</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">-</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black dark:text-white">₺89.50</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <button class="text-black dark:text-white hover:underline">Detay</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
