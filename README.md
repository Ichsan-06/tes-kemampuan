## 📌 Deskripsi Singkat Proyek

Repository ini adalah proyek evaluasi kemampuan Fullstack Developer menggunakan Laravel dan MySQL, yang dikembangkan untuk Perusahaan Rimba Ananta Vikasa Indonesia. Proyek ini merupakan aplikasi CRUD sederhana yang berjalan di lingkungan Docker menggunakan Laravel Sail.

## 🛠️ Teknologi yang digunakan

- Laravel - Framework PHP untuk backend
- MySQL - Database management system
- Docker - Containerization platform
- Laravel Sail - Untuk menjalankan Laravel di Docker
- Composer - Dependency manager untuk PHP

## 📥 Instalasi & Menjalankan Aplikasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan aplikasi di lokal:

1. Clone Repository
```bash
git clone https://github.com/Ichsan-06/tes-kemampuan.git
```

2. Masuk kedalam project
```bash
cd tes-kemampuan
```
3. Salin file konfigurasi
```bash
cp .env.example .env
```
4. Install dependencies
```bash
composer install
```
5. Generate application key
```bash
php artisan key:generate
```
6. Pastikan docker sudah terinstall di laptop anda.

7. Jalankan aplikasi
```bash
./vendor/bin/sail up -d
```

8. Masuk ke container docker untuk migrate database
```bash
./vendor/bin/sail shell
php artisan migrate
```

9. Akses aplikasi
```bash
http://0.0.0.0:80
```


## 📚 Fitur Utama

✅ CRUD (Create, Read, Update, Delete) Data

✅ Menggunakan MySQL sebagai database

✅ Menjalankan Laravel dalam Docker melalui Laravel Sail

✅ Struktur kode yang bersih dan mudah dikembangkan

💡 **Dibuat dengan ❤️ oleh **M Ichsan
