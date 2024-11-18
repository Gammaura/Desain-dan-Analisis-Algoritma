# **Dokumen Persyaratan Bisnis (BRD)**  
### **Proyek:** Aplikasi Pengelolaan Menu Restoran Gammaura  
**Versi:** 1.1  
**Tanggal:** 15 November 2024  

---

## **1. Tujuan Proyek**  
- **Objektif**:  
  - Meningkatkan efisiensi manajemen menu di Restoran Gammaura.  
  - Memberikan kemudahan bagi pembeli untuk melihat daftar menu dan membuat pesanan secara langsung melalui aplikasi.  

---

## **2. Fitur Utama**  

### **Untuk Admin**  
- **Pengelolaan Menu**:  
  - Menambah, mengubah, dan menghapus item menu.  
  - Menyimpan informasi menu seperti nama, deskripsi, harga, kategori, dan gambar.  
  - Mengatur status menu (aktif/non-aktif).  

- **Pengelolaan Kategori**:  
  - Menambah, mengedit, dan menghapus kategori seperti makanan pembuka, makanan utama, dan minuman.  

- **Pencarian Menu**:  
  - Fitur pencarian dan filter untuk menemukan menu berdasarkan kategori, nama, atau harga.  

### **Untuk Pembeli**  
- **Melihat Menu**:  
  - Pembeli dapat melihat daftar menu berdasarkan kategori dengan informasi lengkap seperti:  
    - Nama item  
    - Deskripsi  
    - Harga  
    - Gambar  

- **Fitur Pesanan**:  
  - Pembeli dapat memilih item dari menu untuk menambahkan ke keranjang pesanan.  
  - Menentukan jumlah setiap item dalam keranjang.  
  - Melakukan checkout untuk memproses pesanan.  

- **Status Pesanan**:  
  - Pembeli dapat memantau status pesanan (diproses, selesai, diantar).  

---

## **3. Persyaratan Fungsional**  

### **Sistem Login**  
- **Untuk Admin**:  
  - Login aman dengan autentikasi berbasis email dan kata sandi.  

- **Untuk Pembeli**:  
  - Tidak memerlukan login untuk melihat menu.  
  - Opsional untuk login jika ingin menyimpan riwayat pesanan atau profil pengguna.  

### **Pengelolaan Pesanan**  
- Pembeli dapat mengirimkan pesanan yang akan diterima oleh admin.  
- Admin memiliki fitur untuk melihat, memproses, dan menyelesaikan pesanan.  

---

## **4. Persyaratan Non-Fungsional**  

- **Kegunaan**:  
  - Pembeli dapat dengan mudah mencari menu dan memesan tanpa pelatihan.  
  - Antarmuka admin sederhana untuk mengelola pesanan masuk.  

- **Keamanan**:  
  - Data pesanan dan informasi pembeli dienkripsi.  

- **Kinerja**:  
  - Sistem tetap responsif meskipun terdapat hingga 200 pesanan aktif.  

---

## **5. Teknologi yang Akan Digunakan**  

- **Frontend**: React.js untuk pengalaman pengguna yang interaktif.  
- **Backend**: Laravel untuk pengelolaan data.  
- **Database**: MySQL untuk menyimpan data menu, pesanan, dan kategori.  
- **Server**: Nginx untuk aplikasi berbasis web.  
- **Deployment**: Docker untuk memastikan konsistensi lingkungan pengembangan dan produksi.  

---

## **6. Timeline Proyek**  

| **Tahap**               | **Tanggal Mulai** | **Tanggal Selesai** |  
|-------------------------|-------------------|---------------------|  
| Analisis dan Perancangan| 20 November 2024  | 30 November 2024    |  
| Pengembangan            | 1 Desember 2024   | 20 Desember 2024    |  
| Pengujian               | 21 Desember 2024  | 28 Desember 2024    |  
| Peluncuran              | 1 Januari 2025    | -                   |  

---
