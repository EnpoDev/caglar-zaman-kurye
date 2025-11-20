@extends('layouts.app')

@section('content')
<div class="p-6">
    <!-- Başlık -->
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-black dark:text-white">Siparişler</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Tüm siparişlerinizi görüntüleyin ve yönetin</p>
    </div>

    <!-- Filtreler -->
    <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-4 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-black dark:text-white mb-2">Durum</label>
                <select class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                    <option>Tümü</option>
                    <option>Hazırlanıyor</option>
                    <option>Yolda</option>
                    <option>Teslim Edildi</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-black dark:text-white mb-2">Tarih</label>
                <input type="date" class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
            </div>
            <div>
                <label class="block text-sm font-medium text-black dark:text-white mb-2">Arama</label>
                <input type="text" placeholder="Sipariş No..." class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white placeholder-gray-500">
            </div>
            <div class="flex items-end">
                <button class="w-full px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
                    Filtrele
                </button>
            </div>
        </div>
    </div>

    <!-- Sipariş Listesi -->
    <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="border-b border-gray-200 dark:border-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">SİPARİŞ NO</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">MÜŞTERİ</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">TUTAR</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">DURUM</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">KURYE</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">ZAMAN</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-900">
                        <td class="px-6 py-4 text-sm text-black dark:text-white">#1001</td>
                        <td class="px-6 py-4 text-sm text-black dark:text-white">Ahmet Yılmaz</td>
                        <td class="px-6 py-4 text-sm text-black dark:text-white">₺125.00</td>
                        <td class="px-6 py-4 text-sm">
                            <span class="px-2 py-1 text-xs border border-gray-300 dark:border-gray-700 rounded">Hazırlanıyor</span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">-</td>
                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">10 dk önce</td>
                    </tr>
                    <!-- Daha fazla satır buraya eklenebilir -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
