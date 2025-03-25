# Laravel Project

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

## Instalasi dan Konfigurasi Laravel

1. **Clone Repository**
   ```sh
   git clone https://github.com/username/repository.git
   cd repository
   ```
2. **Install Dependencies**
   ```sh
   composer install
   ```
3. **Copy File Environment**
   ```sh
   cp .env.example .env
   ```
4. **Generate Key**
   ```sh
   php artisan key:generate
   ```
5. **Konfigurasi Database**
   - Edit file `.env`
   - Sesuaikan konfigurasi database Anda
6. **Migrasi Database**
   ```sh
   php artisan migrate
   ```
7. **Jalankan Server**
   ```sh
   php artisan serve
   ```

## Mengenal Controller, Function, Route & View

### 1. Membuat Controller dan Function
   ```sh
   php artisan make:controller HelloWorldController
   ```

   Tambahkan function berikut di `app/Http/Controllers/HelloWorldController.php`:
   ```php
   public function index() {
       return "Hello World!";
   }
   ```

### 2. Menambahkan Route
   Edit file `routes/web.php`:
   ```php
   use App\Http\Controllers\HelloWorldController;

   Route::get('/hello-world', [HelloWorldController::class, 'index']);
   ```

### 3. Menampilkan View
   Buat file `resources/views/hello.blade.php`:
   ```html
   <h1>Hello World dari Laravel!</h1>
   ```
   Ubah function pada controller:
   ```php
   public function index() {
       return view('hello');
   }
   ```
   **Tampilan Hello World:**
   ![Hello World](screenshots/hello-world.png)

### 4. Mengambil File
   ```php
   public function ambilFile() {
       return response()->download(public_path('example.txt'));
   }
   ```
   Tambahkan route:
   ```php
   Route::get('/ambilfile', [HelloWorldController::class, 'ambilFile']);
   ```

### 5. Menampilkan Biodata
   Tambahkan function:
   ```php
   public function biodata() {
       return view('biodata', [
           'nama' => 'Nama Anda',
           'umur' => 20,
           'alamat' => 'Alamat Anda'
       ]);
   }
   ```
   Tambahkan route:
   ```php
   Route::get('/biodata', [HelloWorldController::class, 'biodata']);
   ```
   Buat file `resources/views/biodata.blade.php`:
   ```html
   <h1>Biodata</h1>
   <p>Nama: {{ $nama }}</p>
   <p>Umur: {{ $umur }}</p>
   <p>Alamat: {{ $alamat }}</p>
   ```
   **Tampilan Biodata:**
   ![Biodata]([screenshots/biodata.png](https://github.com/Tempe-mendoan/Belajar-Laravel12/blob/main/public/bio.png?raw=true))

---
**Selesai!** 🚀

