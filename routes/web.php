<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Harita;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Guest Routes (Authentication)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // Password Reset (placeholder routes)
    Route::get('/forgot-password', function () {
        return view('auth.login');
    })->name('password.request');
});

// Authenticated Routes
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Ana Sayfa - Redirect to Harita
    Route::get('/', function () {
        return redirect()->route('harita');
    });

    // Harita & Kurye Takip
    Route::get('/harita', Harita::class)->name('harita');

    // Sipariş Yönetimi
    Route::get('/siparis', function () {
        return view('pages.siparis.liste');
    })->name('siparis.liste');

    Route::get('/siparis/gecmis', function () {
        return view('pages.siparis.gecmis');
    })->name('siparis.gecmis');

    Route::get('/siparis/iptal', function () {
        return view('pages.siparis.iptal');
    })->name('siparis.iptal');

    Route::get('/siparis/istatistik', function () {
        return view('pages.siparis.istatistik');
    })->name('siparis.istatistik');

    // Yönetim
    Route::get('/yonetim/entegrasyonlar', function () {
        return view('pages.yonetim.entegrasyonlar');
    })->name('yonetim.entegrasyonlar');

    Route::get('/yonetim/paketler', function () {
        return view('pages.yonetim.paketler');
    })->name('yonetim.paketler');

    Route::get('/yonetim/urunler', function () {
        return view('pages.yonetim.urunler');
    })->name('yonetim.urunler');

    Route::get('/yonetim/kartlar', function () {
        return view('pages.yonetim.kartlar');
    })->name('yonetim.kartlar');

    Route::get('/yonetim/abonelikler', function () {
        return view('pages.yonetim.abonelikler');
    })->name('yonetim.abonelikler');

    Route::get('/yonetim/islemler', function () {
        return view('pages.yonetim.islemler');
    })->name('yonetim.islemler');

    // İşletmem
    Route::get('/isletmem/kullanicilar', function () {
        return view('pages.isletmem.kullanicilar');
    })->name('isletmem.kullanicilar');

    Route::get('/isletmem/menu', function () {
        return view('pages.isletmem.menu');
    })->name('isletmem.menu');

    Route::get('/isletmem/menu-entegrasyon', function () {
        return view('pages.isletmem.menu-entegrasyon');
    })->name('isletmem.menu-entegrasyon');

    Route::get('/isletmem/musteriler', function () {
        return view('pages.isletmem.musteriler');
    })->name('isletmem.musteriler');

    Route::get('/isletmem/kuryeler', function () {
        return view('pages.isletmem.kuryeler');
    })->name('isletmem.kuryeler');

    // Hesap Ayarları
    Route::get('/ayarlar/genel', function () {
        return view('pages.ayarlar.genel');
    })->name('ayarlar.genel');

    Route::get('/ayarlar/uygulama', function () {
        return view('pages.ayarlar.uygulama');
    })->name('ayarlar.uygulama');

    Route::get('/ayarlar/odeme', function () {
        return view('pages.ayarlar.odeme');
    })->name('ayarlar.odeme');

    Route::get('/ayarlar/yazici', function () {
        return view('pages.ayarlar.yazici');
    })->name('ayarlar.yazici');

    Route::get('/ayarlar/bildirim', function () {
        return view('pages.ayarlar.bildirim');
    })->name('ayarlar.bildirim');

    Route::get('/ayarlar/yazarkasa', function () {
        return view('pages.ayarlar.yazarkasa');
    })->name('ayarlar.yazarkasa');

    // Tema & Destek
    Route::get('/tema', function () {
        return view('pages.tema');
    })->name('tema');

    Route::get('/destek', function () {
        return view('pages.destek');
    })->name('destek');
});
