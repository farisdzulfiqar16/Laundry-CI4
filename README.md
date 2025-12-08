# Dokumentasi Sistem Informasi Laundry Rizki
## Integrasi ReactJS dan CodeIgniter 4

Dokumen ini disusun sebagai bagian dari laporan akademik dan dokumentasi teknis
pada pengembangan Sistem Informasi Laundry Rizki. Sistem ini dibangun dengan
mengintegrasikan *frontend* berbasis ReactJS dengan *backend* CodeIgniter 4 (CI4),
di mana CI4 berfungsi sebagai *web runner* dan penyedia konfigurasi dinamis melalui
berkas `settings.json`.

---

## 1. Pendahuluan
Sistem Informasi Laundry Rizki dirancang untuk memberikan layanan informasi yang
dinamis, mudah diperbarui, dan dapat digunakan sebagai dasar pengembangan lanjutan.
Frontend dibuat menggunakan ReactJS karena kemampuannya dalam membangun antarmuka
yang interaktif. Sementara itu, CodeIgniter 4 digunakan untuk menjalankan website
secara mandiri setelah proses *build* ReactJS selesai.

---

## 2. Tujuan Pengembangan
Tujuan dari pengembangan sistem ini adalah:
1. Membuat website yang responsif dan interaktif menggunakan ReactJS.
2. Menyediakan sistem konfigurasi yang dapat diperbarui tanpa proses *rebuild*.
3. Mengintegrasikan ReactJS yang telah dibuild ke dalam kerangka kerja CI4.
4. Memudahkan tim dalam melakukan pembaruan isi website melalui berkas JSON.
5. Menciptakan sistem yang bersifat *standalone* dan siap untuk di-deploy.

---

## 3. Teknologi yang Digunakan
Pengembangan sistem menggunakan teknologi sebagai berikut:

- **ReactJS + Vite**  
  Digunakan untuk membangun antarmuka pengguna (UI). Proses *build* menghasilkan
  berkas HTML, CSS, dan JavaScript yang siap dipasang.

- **CodeIgniter 4**  
  Berfungsi sebagai *web server runner*, menangani routing, serta menyediakan
  file konfigurasi yang dapat disunting.

- **settings.json**  
  Menjadi sumber utama data dinamis yang dapat diperbarui tanpa melakukan
  kompilasi ulang pada React.

- **Composer**  
  Digunakan untuk mengelola dependensi di CodeIgniter 4.

---

## 4. Struktur Proyek

Struktur proyek utama:

Laundry-CI4/
	app/ # Direktori aplikasi CI4
	public/
	assets/ # File hasil build ReactJS
	index.html # Entry point React
	settings.json # Berkas konfigurasi yang dapat diedit
	index.php # Bootstrap CI4
	.htaccess
system/
writable/
spark


---

## 5. Cara Menjalankan Sistem

### 5.1 Instalasi
1. Lakukan *clone* repository:
   
  git clone https://github.com/
  <username>/Laundry-CI4.git

3. Masuk ke direktori proyek:
   
cd Laundry-CI4

3. Install dependensi CI4:
   
composer install


### 5.2 Menjalankan Server
Untuk menjalankan sistem:

php spark serve


Akses:  
**http://localhost:8080**

Website berjalan sepenuhnya menggunakan CI4 dan tidak membutuhkan server React.

---

## 6. Mekanisme Pembaruan Data

Semua informasi pada website dapat diubah dengan menyunting berkas berikut:

  public/settings.json

Isi file JSON tersebut akan secara otomatis dibaca oleh React pada saat runtime,
sehingga perubahan dapat terlihat tanpa *rebuild* atau *compile ulang*.

Contoh bagian konfigurasi:

{
  "namaLaundry": "Laundry Rizki",
  "tagline": "Cepat, bersih, wangi — layanan laundry profesional untuk Anda.",

  "kontak": {
    "whatsapp": "6281234567890",
    "telegram": "@laundry_rizki",

  },

  "layanan": [
    {
    }
  ]
}



---

## 7. Mekanisme Integrasi ReactJS dan CI4

Tahapan integrasi adalah sebagai berikut:

1. Pengembangan frontend dilakukan penuh menggunakan ReactJS.
2. Setelah selesai, dilakukan proses:

  npm run build

3. Hasil build berupa folder `dist/` dipindahkan ke folder:

  public/

4. File `index.html` dan folder `assets/` digabungkan ke dalam folder `public`.
5. CI4 mengarahkan semua route ke `index.html` (kecuali API), sehingga React dapat
menangani routing internal.

---

## 8. Keunggulan Sistem

1. **Stand-alone**  
Website berjalan hanya menggunakan CI4, tanpa perlu React dev server.

2. **Editable**  
Semua teks, kontak, layanan, dan data penting dapat diubah melalui JSON.

3. **Maintainable**  
Tim non-developer dapat mengelola konten website tanpa harus melakukan coding.

4. **Dapat dikembangkan untuk HKI**  
React asli dapat disimpan terpisah sebagai aset pengembangan.

---

## 9. Kesimpulan

Sistem Informasi Laundry Rizki berhasil dibuat dengan integrasi antara ReactJS
dan CodeIgniter 4 yang efektif. Pendekatan ini memberikan fleksibilitas tinggi
dalam pengembangan, kemudahan pembaruan konten, dan memungkinkan sistem berjalan
secara mandiri. Dokumentasi ini disusun sebagai pendamping laporan akademik dan
landasan untuk pengembangan lebih lanjut.

---

## 10. Informasi Penyusun

**Nama** :Faris Dzulfiqar , UUT Prasetia  
**Program Studi** : Teknik Informatika  
**Proyek** : Sistem Informasi Laundry Rizki  
**Tahun** : 2025










