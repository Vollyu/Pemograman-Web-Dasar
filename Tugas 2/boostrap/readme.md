# 📸 Instagram Clone dengan TailwindCSS

Proyek ini adalah **tugas pemrograman web** yang membuat tampilan sederhana mirip halaman profil Instagram menggunakan **HTML5 + TailwindCSS + Bootstrap Icons**.  

---

## 📖 Penjelasan Kode

### 1. Struktur Dasar HTML
```html
<!DOCTYPE html>
<html lang="en">
<head> ... </head>
<body> ... </body>
</html>
```
- `<!DOCTYPE html>` → mendefinisikan dokumen HTML5.  
- `<head>` → berisi judul, meta, dan link CSS.  
- `<body>` → berisi konten utama halaman.  

---

### 2. Library
```html
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/...">
```
- **TailwindCSS (CDN)** → styling berbasis utility class.  
- **Bootstrap Icons** → ikon untuk menu tab (post, reels, archive).  

---

### 3. Container Utama
```html
<div class="max-w-4xl mx-auto mt-8 px-4">
```
- `max-w-4xl` → lebar maksimal.  
- `mx-auto` → posisi tengah.  
- `mt-8` → margin atas.  
- `px-4` → padding kiri dan kanan.  

---

### 4. Profile Header
Terdiri dari **foto profil (kiri)** dan **info pengguna (kanan)**.  

- **Foto Profil**
```html
<img src="8.jpg" class="w-36 h-36 rounded-full object-cover border-2 border-gray-300">
```
  - Bulat (`rounded-full`), berukuran `36x36`, dengan border abu-abu.  

- **Info Pengguna**
  - Username + tombol **Edit Profile**, **Share Profile**, ikon ⚙️.  
  - Statistik: jumlah postingan, followers, following.  
  - Bio dengan teks singkat dan link.  

---

### 5. Tab Menu
```html
<div class="flex border-y border-gray-300 mt-6 text-center">
  <div class="flex-1 py-3 border-t-2 border-black font-semibold">
    <i class="bi bi-grid-3x3"></i>
  </div>
  <div class="flex-1 py-3"><i class="bi bi-play-btn"></i></div>
  <div class="flex-1 py-3"><i class="bi bi-archive"></i></div>
</div>
```
- `flex` → sejajar ke samping.  
- `flex-1` → lebar sama untuk tiap menu.  
- Ikon:
  - Grid → Postingan.  
  - Play → Reels/Video.  
  - Archive → Arsip.  

---

### 6. Grid Postingan
```html
<div class="grid grid-cols-3 gap-[2px] mt-3">
  <img src="1.jpg" class="w-full aspect-square object-cover">
  ...
</div>
```
- `grid-cols-3` → 3 kolom foto.  
- `gap-[2px]` → jarak kecil antar gambar.  
- `aspect-square` → menjaga foto berbentuk persegi.  
- `object-cover` → foto tetap proporsional.  

---

## 🎯 Hasil Akhir
- Foto profil di kiri.  
- Nama, tombol, statistik, bio di kanan.  
- Menu tab (post, reels, archive).  
- Grid galeri foto (12 gambar).  

Tampilan menyerupai halaman profil Instagram, **namun statis** (belum ada fitur interaktif).  

---

## 🛠️ Teknologi yang Digunakan
- **HTML5** → struktur halaman.  
- **TailwindCSS (CDN)** → styling cepat berbasis utility.  
- **Bootstrap Icons** → ikon navigasi.  

---

## 🚀 Cara Menjalankan
1. Simpan kode di file `index.html`.  
2. Siapkan gambar (`1.jpg` hingga `12.jpg` + `8.jpg` untuk profil).  
3. Buka `index.html` di browser.  

---

## 📝 Catatan
- Proyek ini hanya **front-end statis** (tanpa JavaScript interaktif).  
- Cocok untuk latihan layouting dengan **TailwindCSS**.  
