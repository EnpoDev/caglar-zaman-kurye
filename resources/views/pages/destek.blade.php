@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-black dark:text-white">Teknik Destek</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Yardım alın ve destek talebi oluşturun</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- İletişim Bilgileri -->
        <div class="lg:col-span-1">
            <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6 mb-6">
                <h3 class="text-lg font-semibold text-black dark:text-white mb-4">İletişim</h3>
                <div class="space-y-4">
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Telefon</p>
                        <p class="text-sm text-black dark:text-white">0850 XXX XX XX</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">E-posta</p>
                        <p class="text-sm text-black dark:text-white">destek@seferxlogistics.com</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Çalışma Saatleri</p>
                        <p class="text-sm text-black dark:text-white">Hafta içi 09:00 - 18:00</p>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Hızlı Linkler</h3>
                <div class="space-y-2">
                    <a href="#" class="block text-sm text-black dark:text-white hover:opacity-60">📖 Kullanım Kılavuzu</a>
                    <a href="#" class="block text-sm text-black dark:text-white hover:opacity-60">❓ Sıkça Sorulan Sorular</a>
                    <a href="#" class="block text-sm text-black dark:text-white hover:opacity-60">🎥 Video Eğitimler</a>
                    <a href="#" class="block text-sm text-black dark:text-white hover:opacity-60">🔄 Yenilikler</a>
                </div>
            </div>
        </div>

        <!-- Destek Formu -->
        <div class="lg:col-span-2">
            <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Destek Talebi Oluştur</h3>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-black dark:text-white mb-2">Konu</label>
                        <input type="text" placeholder="Sorun başlığını yazın" class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white placeholder-gray-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-black dark:text-white mb-2">Kategori</label>
                        <select class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                            <option>Teknik Sorun</option>
                            <option>Ödeme Sorunu</option>
                            <option>Sipariş Sorunu</option>
                            <option>Entegrasyon Sorunu</option>
                            <option>Özellik İsteği</option>
                            <option>Diğer</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-black dark:text-white mb-2">Öncelik</label>
                        <select class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white">
                            <option>Düşük</option>
                            <option>Normal</option>
                            <option>Yüksek</option>
                            <option>Acil</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-black dark:text-white mb-2">Açıklama</label>
                        <textarea rows="6" placeholder="Sorununuzu detaylı olarak açıklayın..." class="w-full px-3 py-2 bg-white dark:bg-black border border-gray-300 dark:border-gray-700 rounded-lg text-black dark:text-white placeholder-gray-500"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-black dark:text-white mb-2">Dosya Ekle</label>
                        <div class="border-2 border-dashed border-gray-300 dark:border-gray-700 rounded-lg p-6 text-center">
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Ekran görüntüsü veya dosya sürükleyin</p>
                            <button type="button" class="text-sm text-black dark:text-white hover:opacity-60">veya bilgisayardan seçin</button>
                        </div>
                    </div>
                    <button type="submit" class="w-full px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-lg hover:opacity-80">
                        Destek Talebi Gönder
                    </button>
                </form>
            </div>

            <!-- Önceki Talepler -->
            <div class="bg-white dark:bg-[#181818] border border-gray-200 dark:border-gray-800 rounded-lg p-6 mt-6">
                <h3 class="text-lg font-semibold text-black dark:text-white mb-4">Önceki Talepleriniz</h3>
                <div class="space-y-3">
                    <div class="p-4 border border-gray-200 dark:border-gray-800 rounded-lg">
                        <div class="flex justify-between items-start mb-2">
                            <p class="text-sm font-medium text-black dark:text-white">Yazıcı bağlantı sorunu</p>
                            <span class="px-2 py-1 text-xs border border-gray-300 dark:border-gray-700 rounded">Çözüldü</span>
                        </div>
                        <p class="text-xs text-gray-600 dark:text-gray-400">15 Kasım 2025 - Talep #12345</p>
                    </div>
                    <div class="p-4 border border-gray-200 dark:border-gray-800 rounded-lg">
                        <div class="flex justify-between items-start mb-2">
                            <p class="text-sm font-medium text-black dark:text-white">Ödeme entegrasyonu hakkında soru</p>
                            <span class="px-2 py-1 text-xs bg-black dark:bg-white text-white dark:text-black rounded">Devam Ediyor</span>
                        </div>
                        <p class="text-xs text-gray-600 dark:text-gray-400">18 Kasım 2025 - Talep #12346</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
