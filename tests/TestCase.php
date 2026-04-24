<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    //
}


 // Langkah 1: Install Project
 // Pada terminal yang sudah terbuka, jalankan perintah berikut untuk membuat project baru bernama nama-project:
 // composer create-project laravel/laravel:^12.0 nama-project

 // Langkah 2: Masuk ke Direktori Project
 // Setelah proses instalasi selesai, masuk ke dalam folder project yang baru saja dibuat:
 // cd nama-project

 // Langkah 3: Menjalankan Local Development Server
 // Untuk menjalankan project Laravel, gunakan perintah Artisan berikut (Jika menggunakan xampp):
 // php artisan serve

 // Instalasi Laravel Breeze
 // Laravel Breeze adalah paket bawaan resmi dari Laravel yang memberikan pondasi awal (scaffolding)
 // yang sangat cepat dan sederhana untuk semua fitur autentikasi. Dengan Breeze, fitur seperti Login,
 // Register, Reset Password, dan Dashboard pengguna sudah langsung tersedia menggunakan styling dari Tailwind CSS.

 // Alur Instalasi Breeze:

 // Konfigurasi Database:
 // Sebelum menginstal, Anda harus memastikan aplikasi sudah terhubung ke database.

 // Unduh Paket Breeze:
 // Anda menggunakan manajer paket (Composer) untuk mengunduh Laravel Breeze ke dalam project.
 // composer require laravel/breeze --dev

 // Proses Instalasi:
 // Anda menjalankan perintah instalasi bawaan Breeze dan memilih jenis kerangka tampilan yang diinginkan
 // (umumnya menggunakan Blade).
 // php artisan breeze:install

 // Migrasi Database:
 // Anda menjalankan perintah migrasi agar Laravel otomatis membuatkan tabel-tabel yang dibutuhkan
 // untuk sistem login (seperti tabel users) ke dalam database Anda.
 // php artisan migrate

 // Kompilasi Aset:
 // Terakhir, Anda menggunakan Node Package Manager (NPM) untuk mengunduh dependensi frontend dan
 // memproses file CSS/JavaScript agar tampilan login dan register terlihat rapi.
 // npm install

 // Kemudian jalankan dengan perintah berikut.
 // composer run dev

 // Lakukan instalasi Laravel Breeze hingga fitur Login dan Register berfungsi serta dapat diakses melalui browser.

 // Buatlah sebuah Route baru dengan alamat URL /about di routes/web.php.

 // Buatlah sebuah Controller baru untuk menangani halaman biodata tersebut.
 // Arahkan route yang dibuat pada langkah 2 ke fungsi di dalam Controller ini.
 // php artisan make:controller namaController
 // php artisan make:controller ProductController

 // Cara membuat Model dan Migration:
 // Untuk membuat Model beserta file Migration-nya secara bersamaan, jalankan perintah Artisan berikut di dalam terminal:
 // php artisan make:model NamaModel -m

 // php artisan migrate

 // Cek phpMyAdmin Anda dan pastikan tabel-tabel tersebut sudah berhasil terbentuk dengan struktur kolom yang tepat.

 // Catatan:
 // Pastikan untuk selalu menjalankan perintah php artisan migrate setiap kali Anda melakukan perubahan pada file Migration
 // agar perubahan tersebut dapat diterapkan ke database.

 // Pembuatan Policy:
 // Policy dibuat menggunakan perintah Artisan
 // php artisan make:policy

 // php artisan make:request StoreProductRequest

 // Perintah ini akan membuat file di app/Http/Requests/StoreProductRequest.php
 // di mana logika aturan (rules) dan otorisasi ditempatkan secara terpisah dari Controller.

 // php artisan make:component AddProduct

 // Membuat Logic Component (Class) app/View/Components/AddProduct.php
