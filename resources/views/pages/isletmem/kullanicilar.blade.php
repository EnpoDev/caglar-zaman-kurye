@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6 flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-black dark:text-white">Kullanıcı Yönetimi</h1>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">İşletme kullanıcılarını yönetin</p>
        </div>
        <button class="px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
            + Yeni Kullanıcı
        </button>
    </div>

    <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="border-b border-gray-200 dark:border-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">AD SOYAD</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">E-POSTA</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">ROL</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">DURUM</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400">İŞLEMLER</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-900">
                        <td class="px-6 py-4 text-sm text-black dark:text-white">Ahmet Yılmaz</td>
                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">ahmet@example.com</td>
                        <td class="px-6 py-4 text-sm text-black dark:text-white">Yönetici</td>
                        <td class="px-6 py-4 text-sm">
                            <span class="px-2 py-1 text-xs border border-gray-300 dark:border-gray-700 rounded">Aktif</span>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-black dark:text-white hover:opacity-60 mr-3">Düzenle</button>
                            <button class="text-black dark:text-white hover:opacity-60">Sil</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
