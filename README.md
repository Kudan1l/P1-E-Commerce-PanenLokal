# ✨ Panen Lokal ✨

## 📌 Deskripsi
Panen Lokal adalah platform berbasis web yang dikembangkan menggunakan Laravel untuk menjual berbagai jenis sayuran segar secara online. Platform ini memungkinkan pengguna untuk menelusuri produk, menambahkan produk ke keranjang belanja, melakukan checkout, serta mengelola pesanan dengan mudah.

## 🚀 Fitur Utama
- 🔍 **Manajemen Produk**: Menampilkan daftar produk dengan informasi lengkap seperti nama, harga, stok, dan deskripsi.
- 🛒 **Keranjang Belanja**: Menambahkan produk ke keranjang, mengupdate jumlah, dan menghapus item.
- 📦 **Checkout**: Proses pembelian dengan metode pembayaran yang tersedia.
- 👤 **Autentikasi Pengguna**: Registrasi, login, dan logout.
- 📊 **Dashboard Admin**: Mengelola produk, pesanan, dan pengguna.
- 📜 **Riwayat Pesanan**: Menampilkan daftar pesanan pengguna.

## 🛠️ Teknologi yang Digunakan
- **Framework**: Laravel 10
- **Database**: MySQL
- **Frontend**: Blade, Bootstrap
- **Authentication**: Laravel Breeze / Sanctum (Opsional)
- **Payment Gateway**: Midtrans / Stripe (Opsional)

## 🔧 Instalasi & Setup
1. **Clone Repository**
   ```bash
   git clone https://github.com/agunglaksonoputra/P1-E-Commerce-PanenLokal.git
   cd panen-lokal
   ```
2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```
3. **Konfigurasi Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Edit file `.env` dan sesuaikan pengaturan database.

4. **Migrasi Database**
   ```bash
   php artisan migrate --seed
   ```

5. **Jalankan Aplikasi**
   ```bash
   php artisan serve
   ```
   Akses aplikasi di `http://127.0.0.1:8000`

---
💡 *"Dukung pertanian lokal dengan belanja sayur segar secara online!"*

