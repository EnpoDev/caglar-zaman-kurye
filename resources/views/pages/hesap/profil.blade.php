@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-black dark:text-white">Profil Ayarları</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-1">Kişisel bilgilerinizi yönetin</p>
        </div>
    </div>

    <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
        <form class="space-y-6">
            <div class="flex items-center space-x-6">
                <div class="w-20 h-20 bg-black dark:bg-white rounded-full flex items-center justify-center">
                    <span class="text-white dark:text-black font-bold text-2xl">MH</span>
                </div>
                <div>
                    <button type="button" class="px-4 py-2 bg-black dark:bg-white text-white dark:text-black font-medium rounded-lg hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors text-sm">
                        Fotoğraf Değiştir
                    </button>
                    <p class="text-xs text-gray-600 dark:text-gray-400 mt-2">JPG, PNG maksimum 2MB</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Ad</label>
                    <input type="text" value="Muhammet Hüseyin"
                           class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Soyad</label>
                    <input type="text" value="Koçaş"
                           class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">E-posta</label>
                    <input type="email" value="mh@example.com"
                           class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Telefon</label>
                    <input type="tel" value="+90 (555) 123-4567"
                           class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-black dark:bg-white text-white dark:text-black font-medium rounded-lg hover:bg-gray-800 dark:hover:bg-gray-200 transition-colors">
                    Kaydet
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
