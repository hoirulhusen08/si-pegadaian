# Sistem Informasi Pegadaian

Sistem Informasi Pegadaian ini dibangun dengan Framework <a href="https://codeigniter.com/userguide3" target="_blank">Codeigniter 3</a>. Sistem ini dibuat atas dasar untuk memenuhi kebutuhan Tugas Akhir Mahasiswa (Skripsi) pada PT. Pegadaian cabang Bandar Jaya. Sistem ini memiliki 3 Peran di antaranya:

1. Administrator.
2. Staff.
3. Nasabah.

<strong>A. Halaman Utama Web</strong>
<p align="center">
  <img src='https://github.com/hoirulhusen08/.github/blob/main/assets-si-pegadaian/1.%20Homepage%20SI-Pegadaian.png' alt="Homepage" width="100%">
</p>

<strong>B. Dashboard Administrator</strong>
<p align="center">
  <img src='https://github.com/hoirulhusen08/.github/blob/main/assets-si-pegadaian/2.%20Dashboard%20Admin%20SI-Pegadaian.PNG' alt="Dashboard Admin" width="100%">
</p>

<strong>C. Pengaturan Web</strong>
<p align="center">
  <img src='https://github.com/hoirulhusen08/.github/blob/main/assets-si-pegadaian/3.%20Pengaturan%20Web%20SI-Pegadaian.PNG' alt="Settings Page" width="100%">
</p>

<strong>D. Halaman Login</strong>
<p align="center">
  <img src='https://github.com/hoirulhusen08/.github/blob/main/assets-si-pegadaian/4.%20Halaman%20Login%20SI-Pegadaian.PNG' alt="Login Page" width="100%">
</p>

<strong>E. Halaman Register</strong>
<p align="center">
  <img src='https://github.com/hoirulhusen08/.github/blob/main/assets-si-pegadaian/5.%20Halaman%20Register%20SI-Pegadaian.PNG' alt="Register Page" width="100%">
</p>

## Teknologi Yang Digunakan

Berikut adalah teknologi di balik sistem ini:

1. Framework CodeIgniter versi 3 (sebagai Kerangka Utama Web)
2. Bootstrap versi 4 (sebagai Framework CSS)
3. Summernote (sebagai WYSIWYG Editor)
4. Datatables (untuk penggunaan Tabel)
5. Jquery (Library JS)
6. Template AdminLTE 3 (sebagai Template Dashboard)

## Persiapan Instalasi

Sebelum melakukan instalasi program ini diwajibkan untuk menyiapkan:

1. Webserver dan MySQL Server (XAMPP, WampServer, Laragon, Mamp, atau yang lainnya)
2. PHP disarankan versi 8.0 - 8.1
3. Composer
4. Git (Optional)

## Proses Instalasi

1. Aktifkan XAMPP lalu masukan seluruh source code program ke folder `htdocs` XAMPP.

2. Ubah konfigurasi pada file `.env` di antaranya:

   - `BASE_URL`
   - `DB_HOSTNAME`
   - `DB_USERNAME`
   - `DB_PASSWORD`
   - `DB_NAME`

   Isi nilai pada variabel di atas disesuaikan dengan kasus masing-masing, yang pasti nilai selalu dibungkus tanda petik dua. Contoh:
   `BASE_URL="http://localhost/nama-project-web"` dan seterusnya.

3. Ketik perintah `Composer Install` untuk mendownload semua library yang digunakan.

4. Untuk Login bisa menggunakan akun berikut:

   **Admin:**

   - Email: [admin@gmail.com](mailto\:admin@gmail.com)
   - Password: 12345678

   **Staff:**

   - Email: [staff@gmail.com](mailto\:staff@gmail.com)
   - Password: 12345678

   **Nasabah:**

   - Email: [nasabah@gmail.com](mailto\:nasabah@gmail.com)
   - Password: 12345678

## Pembuat & Lisensi

Sistem atau program ini dibuat oleh **@hoirulhusen08 (Khoirul Husen)**. Source code ini bersifat Open Source, namun ada beberapa aturan yang berlaku di antaranya:

1. Hak cipta penuh tetap **@hoirulhusen08** (Jika disalahgunakan bisa kami komplain).
2. Boleh digunakan dan dimodifikasi asalkan tidak diperjualbelikan (dikomersilkan).
3. Jika menggunakan source code ini, diharapkan memberikan sumber nama pembuat yaitu: **hoirulhusen08**.
4. Jika ada hal lain untuk menjaga hak cipta, bisa hubungi kontak kami: [hoirulhusen08@gmail.com](mailto\:hoirulhusen08@gmail.com)
