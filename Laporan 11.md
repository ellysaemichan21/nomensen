# Laporan Praktikum Pertemuan 11
## Modifikasi CMS — Announcements & News (Slug Otomatis + Relasi User)

**Nama     :** Yonathan Felix Sidabutar  
**NIM      :** 2302050105  
**Tanggal  :** 22 Juni 2026  

---

## A. Tujuan Praktikum
1. Memahami konsep slug dan `Str::slug()` untuk pembuatan URL yang SEO-friendly dan aman.
2. Memahami komponen `Hidden` pada Filament dan kaitannya dengan `mutateFormDataBeforeCreate()`.
3. Memahami pemanggilan `auth()->id()` untuk mengaitkan record secara otomatis ke user yang sedang login.
4. Menampilkan data relasi `user.name` pada table list Filament.
5. Memodifikasi `AnnouncementResource` dan `NewsResource` sesuai spesifikasi keamanan.

---

## B. Hasil Modifikasi Resource

### B.1 AnnouncementResource
[Screenshot: kode form() dengan Hidden fields]
[Screenshot: kode CreateAnnouncement.php dengan mutateFormDataBeforeCreate]
[Screenshot: form New Pengumuman — hanya 2 field terlihat]
[Screenshot: tabel dengan kolom "Dibuat Oleh" (badge nama admin)]

### B.2 NewsResource
[Screenshot: kode form() NewsResource]
[Screenshot: kode CreateNews.php]
[Screenshot: tabel Berita dengan thumbnail + penulis + slug]


## C. Verifikasi Slug & Relasi

### C.1 Verifikasi Database (TablePlus / Database Client)
* **Tabel `announcements` (Kolom slug terisi otomatis & unik):**  
  `[Screenshot: tabel announcements — kolom slug terisi otomatis dan unik]`

* **Tabel `news` (Kolom `users_id` terisi otomatis):**  
  `[Screenshot: tabel news — kolom users_id terisi]`

### C.2 Verifikasi Relasi via Laravel Tinker
* **Relasi `Announcement` ke `User`:**  
  `[Screenshot: Announcement::first()->user->name]`

* **Relasi `User` ke `Announcement`:**  
  `[Screenshot: User::find(1)->announcements()->count()]`

---

## D. Tabel Skenario Pengujian

| No | Skenario Pengujian | Hasil yang Diharapkan | Status |
|:--:|---|---|:---:|
| 1 | Pengisian form "New Pengumuman" (hanya menginput Judul dan Konten). | Form berhasil disimpan, `slug` digenerate otomatis di latar belakang, dan `users_id` diisi dengan ID user yang sedang login. | ✅ Lulus |
| 2 | Pengisian form "New Berita" (hanya menginput Judul, Gambar, dan Konten). | Form berhasil disimpan, gambar terupload ke storage `news/`, `slug` tergenerate otomatis, dan `users_id` otomatis terisi ID admin. | ✅ Lulus |
| 3 | Membuka detail data Announcement/News menggunakan slug pada routing. | Data berhasil dicari dan ditampilkan sesuai slug, mengonfirmasi Route Model Binding menggunakan slug aman berjalan baik. | ✅ Lulus |
| 4 | Memeriksa relasi model di Tinker dengan menjalankan `Announcement::first()->user->name`. | Tinker berhasil mengembalikan nama user/admin pembuat pengumuman tersebut secara dinamis. | ✅ Lulus |

---

## E. Repository GitHub
`[Screenshot: commit terbaru]`  
Link commit: https://github.com/ellysaemichan21/nomensen/commit/...

---

## F. Kendala dan Solusi

1. **Kendala: Field input slug masih terlihat di form pembuatan.**  
   *Deskripsi:* Awalnya `slug` ditampilkan sebagai `TextInput` yang bersifat `readOnly()`, namun hal ini tidak memenuhi tujuan praktikum untuk menyembunyikan kolom dan hanya menampilkan 2 kolom/field pada form pembuatan pengumuman.  
   *Solusi:* Mengubah tipe input komponen `slug` dari `TextInput` menjadi `Hidden` field di `AnnouncementResource` dan `NewsResource`.

2. **Kendala: Route Model Binding bawaan Laravel masih mengarah ke ID numerik.**  
   *Deskripsi:* Secara bawaan Laravel memetakan parameter route (misal `/news/{news}`) menggunakan kolom kunci primer `id`. Jika tidak disesuaikan, aplikasi tidak dapat mencari data secara implicit berdasarkan slug unik.  
   *Solusi:* Menambahkan override fungsi `getRouteKeyName()` pada model `Announcement.php` dan `News.php` untuk mengembalikan string `'slug'`.

---

## G. Kesimpulan
Praktikum Pertemuan 11 ini berhasil memodifikasi resource *Announcements* dan *News* dengan mengimplementasikan konsep *slug* otomatis dan relasi dinamis ke *User* yang terotentikasi. Dengan memanfaatkan komponen `Hidden` dan metode `mutateFormDataBeforeCreate()`, data sensitif seperti `users_id` dan `slug` dapat diproses secara aman di latar belakang tanpa mengekspos field input yang tidak perlu ke pengguna. Penerapan *Route Model Binding* berbasis *slug* juga sukses mengaburkan ID numerik pada URL (*URL Obfuscation*), sehingga meningkatkan keamanan sistem secara keseluruhan dari potensi ancaman *data enumeration*.