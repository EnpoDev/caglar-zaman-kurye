@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-black dark:text-white">İşletme Bilgileri</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-1">İşletmenizin temel bilgileri</p>
        </div>
    </div>

    <div class="bg-white dark:bg-[#181818] rounded-xl border border-gray-200 dark:border-gray-800 p-6">
        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">İşletme Adı</label>
                    <input type="text" value="IF Irmak Fırın & Cafe"
                           class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Telefon</label>
                    <input type="tel" value="+90 (555) 123-4567"
                           class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">E-posta</label>
                    <input type="email" value="info@irmakfirin.com"
                           class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black dark:text-white mb-2">Vergi No</label>
                    <input type="text" value="1234567890"
                           class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-black dark:text-white mb-2">Adres</label>
                <textarea rows="3"
                          class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg text-black dark:text-white focus:outline-none focus:border-black dark:focus:border-white">Kadıköy, İstanbul</textarea>
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
