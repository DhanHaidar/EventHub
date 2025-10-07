# Kalijaga EventHub

![UIN Sunan Kalijaga](https://img.shields.io/badge/Kampus-UIN%20Sunan%20Kalijaga-blue.svg) ![Status](https://img.shields.io/badge/status-In%20Development-yellow.svg)

Kalijaga EventHub adalah platform informasi terpusat yang didedikasikan untuk sivitas akademika UIN Sunan Kalijaga. Aplikasi ini bertujuan untuk menjadi pusat informasi non-akademik, mempermudah mahasiswa dalam menemukan informasi seputar acara kampus, rekrutmen Unit Kegiatan Mahasiswa (UKM), direktori UMKM milik mahasiswa, serta program zakat dan donasi.

## ✨ Fitur Utama

-   **📅 Informasi Event:** Publikasi dan pencarian acara kampus seperti seminar, workshop, dan kompetisi.
-   **👥 Rekrutmen UKM:** Kanal terpusat bagi UKM untuk mengumumkan pendaftaran anggota baru.
-   **🛍️ Direktori UMKM:** Etalase untuk mempromosikan dan menemukan usaha yang dimiliki oleh mahasiswa.
-   **💖 Zakat & Donasi:** Informasi mengenai kampanye penggalangan dana yang transparan.
-   **🔑 Autentikasi Pengguna:** Sistem registrasi dan login yang sudah siap pakai.
-   **🖥️ Dasbor Admin:** Halaman khusus untuk memvalidasi dan mengelola semua konten yang masuk.

## 🛠️ Teknologi yang Digunakan

Proyek ini dibangun dengan tumpukan teknologi yang terintegrasi:

-   ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
-   ![Vue.js](https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vue.js&logoColor=4FC08D)
-   ![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
-   ![DaisyUI](https://img.shields.io/badge/daisyui-5A0EF8?style=for-the-badge&logo=daisyui&logoColor=white)
-   ![Supabase](https://img.shields.io/badge/Supabase-181818?style=for-the-badge&logo=supabase&logoColor=3ECF8E) (Untuk Database)

## 👨‍💻 Tim Pengembang

Proyek ini dikembangkan dan dikelola oleh:

| Nama                       | NIM         | Peran               |
| :------------------------- | :---------- | :------------------ |
| Idhan Haidar Kurniawan     | 23106050054 | Backend Developer   |
| Muhammad Faisal Ramadhan   | 23106050061 | Frontend Developer  |
| Hanif Ubaidur Rohman Syah  | 23106050081 | Full-Stack Developer|
| Dama Amisuda               | 23106050096 | UI/UX & Frontend    |

## 🚀 Panduan Instalasi & Menjalankan Proyek

Untuk menjalankan proyek ini di lingkungan lokal Anda, ikuti langkah-langkah berikut:

1.  **Clone repositori ini:**
    ```bash
    git clone [https://github.com/hanipubaidur/Kalijaga-EventHub.git](https://github.com/hanipubaidur/Kalijaga-EventHub.git)
    cd Kalijaga-EventHub
    ```

2.  **Konfigurasi Lingkungan (Environment):**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    > **Penting:** Buka file `.env` dan sesuaikan konfigurasi database Anda (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

3.  **Instalasi Dependencies:**
    ```bash
    # Instalasi dependency PHP
    composer install

    # Instalasi dependency JavaScript
    npm install
    ```

4.  **Migrasi Database:**
    Jalankan perintah ini untuk membuat tabel-tabel yang dibutuhkan di database Anda.
    ```bash
    php artisan migrate
    ```

5.  **Menjalankan Server Pengembangan:**
    > **Anda perlu membuka DUA terminal terpisah di dalam folder proyek `Kalijaga-EventHub`.**

    * **Di Terminal 1**, jalankan server backend Laravel:
        ```bash
        php artisan serve
        ```
    * **Di Terminal 2**, jalankan server frontend Vite:
        ```bash
        npm run dev
        ```

6.  **Buka Aplikasi:**
    Buka browser Anda dan akses URL yang diberikan oleh `php artisan serve` (biasanya `http://127.0.0.1:8000`).

## 🤝 Kontribusi

Kami sangat terbuka untuk kontribusi! Jika Anda ingin membantu, silakan *fork* repositori ini dan buat *pull request* dengan perubahan yang Anda usulkan.

---

© 2025 - Tim Pengembang Kalijaga EventHub