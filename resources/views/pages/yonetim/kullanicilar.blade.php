@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-black dark:text-white">Kullanıcı Yönetimi</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-1">Sistem kullanıcıları ve yetkileri</p>
        </div>
        <button class="px-4 py-2 bg-black dark:bg-white text-white dark:text-black font-medium rounded-lg hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors">
            Yeni Kullanıcı
        </button>
    </div>

    <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800">
        <div class="p-6 border-b border-gray-200 dark:border-gray-800">
            <input type="text" placeholder="Kullanıcı ara..."
                   class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-sm text-black dark:text-white placeholder-gray-500 focus:outline-none focus:border-black dark:focus:border-white">
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-100 dark:bg-gray-900">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400 uppercase">Ad Soyad</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400 uppercase">E-posta</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400 uppercase">Rol</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400 uppercase">Durum</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-400 uppercase">İşlem</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-900">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black dark:text-white">Muhammet Hüseyin</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">admin@example.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">Yönetici</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-medium bg-black dark:bg-white text-white dark:text-black rounded">Aktif</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <button class="text-black dark:text-white hover:underline">Düzenle</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
