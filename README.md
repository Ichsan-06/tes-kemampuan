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



## 🔗 Endpoint

### 📋 Mendapatkan Daftar Pengguna
- **GET** `/users`
- **Deskripsi**: Mengambil daftar semua pengguna yang terdaftar.
- **Response Contoh**:
  ```json
  [
    {
      "id": 1,
      "name": "John Doe",
      "email": "johndoe@example.com",
      "age": 20
    },
    {
      "id": 2,
      "name": "Jane Doe",
      "email": "janedoe@example.com",
      "age": 20
    }
  ]
  ```

### 🔍 Mendapatkan Detail Pengguna
- **GET** `/users/:id`
- **Deskripsi**: Mengambil data pengguna berdasarkan `id`.
- **Response Contoh**:
  ```json
  {
    "id": 1,
    "name": "John Doe",
    "email": "johndoe@example.com"
  }
  ```

### ➕ Menambahkan Pengguna Baru
- **POST** `/users`
- **Deskripsi**: Menambahkan pengguna baru ke dalam sistem.
- **Body Request Contoh**:
  ```json
  {
    "name": "Alice Smith",
    "email": "alice@example.com",
    "age": 20
  }
  ```
- **Response Contoh**:
  ```json
  {
    "id": 3,
    "name": "Alice Smith",
    "email": "alice@example.com",
    "age": 20
  }
  ```

### ✏️ Memperbarui Data Pengguna
- **PUT** `/users/:id`
- **Deskripsi**: Memperbarui informasi pengguna berdasarkan `id`.
- **Body Request Contoh**:
  ```json
  {
    "name": "Alice Johnson",
    "email": "alicejohnson@example.com",
    "age": 21
  }
  ```
- **Response Contoh**:
  ```json
  {
    "message": "User updated successfully"
  }
  ```

### ❌ Menghapus Pengguna
- **DELETE** `/users/:id`
- **Deskripsi**: Menghapus pengguna berdasarkan `id`.
- **Response Contoh**:
  ```json
  {
    "message": "User deleted successfully"
  }
  ```

## 📚 Fitur Utama

✅ CRUD (Create, Read, Update, Delete) Data

✅ Menggunakan MySQL sebagai database

✅ Menjalankan Laravel dalam Docker melalui Laravel Sail

✅ Struktur kode yang bersih dan mudah dikembangkan

💡 **Dibuat dengan ❤️ oleh **M Ichsan
