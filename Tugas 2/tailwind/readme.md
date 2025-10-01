# 📸 Instagram Profile Clone (Bootstrap 5)

Proyek ini adalah **clone sederhana halaman profil Instagram** menggunakan **Bootstrap 5** dan **Bootstrap Icons**, dipadukan dengan **custom CSS** agar lebih mirip tampilan aslinya.  

---

## 🚀 Teknologi yang Digunakan
- **HTML5** → Struktur dasar halaman.
- **Bootstrap 5.3.2** → Grid system, responsive layout, tombol, typography, utilities.
- **Bootstrap Icons 1.11.3** → Ikon pada tab menu.
- **Custom CSS** → Penyesuaian agar UI lebih mirip Instagram.

---

## 📂 Struktur Halaman

### 1. Profile Header
Menggunakan **Bootstrap Grid System**:
```html
<div class="row align-items-center">
  <div class="col-4 col-md-3 text-center"> ... </div>
  <div class="col-8 col-md-9"> ... </div>
</div>
```
- `.row` dan `.col-*` → layout responsif.  
- `.align-items-center` → vertikal align tengah.  
- Tombol dibuat dengan Bootstrap:  
  ```html
  <button class="btn btn-sm border">Edit profile</button>
  ```

---

### 2. Stats & Bio
- Menggunakan **Bootstrap utility classes**:  
  - `.d-flex`, `.gap-4` → jarak antar item.  
  - `.small`, `.fw-bold`, `.fs-5` → ukuran teks & style.  

---

### 3. Tab Menu
```html
<div class="d-flex text-center border-top border-bottom mt-4">
  <div class="flex-fill py-3 tab-active">
    <i class="bi bi-grid-3x3"></i>
  </div>
  <div class="flex-fill py-3">
    <i class="bi bi-play-btn"></i>
  </div>
  <div class="flex-fill py-3">
    <i class="bi bi-archive"></i>
  </div>
</div>
```
- `.d-flex` + `.flex-fill` → membuat menu sejajar dan sama lebar.  
- `.border-top` & `.border-bottom` → garis pembatas.  
- Ikon dari **Bootstrap Icons**.  

---

### 4. Posts Grid
Untuk bagian foto grid masih menggunakan **custom CSS** karena Bootstrap default tidak punya grid foto square dengan jarak 2px.  
```css
.posts-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2px;
}
```

---

## 🎨 Perpaduan Bootstrap + Custom CSS
- **Bootstrap** dipakai untuk struktur, layout, tombol, utilities, ikon, dan typography.  
- **Custom CSS** dipakai untuk fitur spesifik Instagram:
  - Ukuran & bentuk foto profil (`.profile-pic`).
  - Grid 3 kolom untuk postingan (`.posts-grid`).
  - Tab aktif (`.tab-active`).  

---

## ⚡ Cara Menjalankan
1. Download/clone repo ini.
2. Buka `index.html` di browser.
3. Pastikan ada internet (karena Bootstrap & Bootstrap Icons pakai CDN).  

---

## ✨ Potensi Pengembangan
- Tambahkan **Bootstrap Tabs/Carousel** untuk konten Reels & Archive.  
- Gunakan **Bootstrap Modal** untuk preview posting.  
- Tambahkan **JavaScript interaktif** agar UI lebih dinamis.  

---

## 📜 Lisensi
Proyek ini hanya untuk **latihan & edukasi**.

