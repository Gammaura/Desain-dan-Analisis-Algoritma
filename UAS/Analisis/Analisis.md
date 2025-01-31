
# Hasil Analisis Gammaura Sports and Healthy

## Dibuat Oleh
    
    Nama  : Arditya Adjie Rosandi
    NIM   : 20230801274
    Kelas : CR001
    Tema  : Kesehatan dan Kebugaran


## **Bagian 1 : Profil Perusahaan**

Gammaura Sports and Healthy adalah perusahaan yang bergerak di bidang olahraga dan kesehatan. Perusahaan ini menyediakan berbagai jenis olahraga, mulai dari latihan fisik umum hingga olahraga spesifik untuk meningkatkan kebugaran dan performa atletik. Selain itu, Gammaura juga menawarkan fitur pemantauan kesehatan, memungkinkan pengguna untuk mengecek status kesehatan mereka secara berkala.

**Visi**
    
    "Menjadi perusahaan terdepan dalam industri olahraga dan kesehatan yang menghadirkan solusi inovatif, holistik, dan berbasis teknologi untuk meningkatkan kualitas hidup masyarakat secara global."

**Misi**

    1. Mendorong Gaya Hidup Sehat
    2. Mengembangkan Teknologi Kesehatan & Kebugaran
    3. Menyediakan Lingkungan yang Mendukung dan Memotivasi

## **Bagian 2 : Layanan dan Fitur Utama**

### (Olahraga yang Tersedia)

**Kompetisi**

    Bulu Tangkis 🏸
    Futsal ⚽
    Renang 🤽🏻‍♂
    Beladiri 🥋

**Non-Kompetisi**

    Jalan Sehat 👟
    Atletik 🎽
    Senam Sehat 🤸
    Angkat Beban 🏋‍♂

### (Pemantauan Status Kesehatan) 

### **1️⃣ Pengukuran Kesehatan Dasar**  
Pemantauan ini mencakup aspek vital kesehatan, yaitu:  
- **Denyut Jantung** *(BPM – beats per minute)*  
- **Tekanan Darah** *(mmHg – sistolik/diastolik)*  
- **Kadar Oksigen dalam Darah (SpO2)** *(%)*  
- **Tingkat Stres & Kualitas Tidur** *(berdasarkan pola istirahat dan variabilitas detak jantung)*  

### **2️⃣ Analisis Komposisi Tubuh**  
Evaluasi fisik yang membantu dalam perencanaan latihan dan pola makan:  
- **Berat Badan** *(kg)*  
- **Indeks Massa Tubuh (BMI)** *(kg/m², dihitung berdasarkan tinggi & berat badan)*  
- **Persentase Lemak Tubuh** *(%)*  
- **Analisis Otot & Hidrasi Tubuh** *(keseimbangan air dan massa otot)*  

### **📌 Keterangan Tambahan:**  
- **BMI (Body Mass Index)**: Indikator proporsi berat badan terhadap tinggi badan.  
- **Tekanan Darah**: Diukur dalam mmHg dengan format **sistolik/diastolik** *(contoh: 120/80 mmHg)*.  
- **Denyut Jantung**: Mengukur jumlah detak jantung per menit *(BPM)*, di mana nilai normal berkisar antara **60-100 BPM** untuk orang dewasa.  
- **SpO2 (Saturasi Oksigen dalam Darah)**: Kadar oksigen dalam darah (%), dengan rentang normal **95-100%**.  
- **Tingkat Stres & Kualitas Tidur**: Dievaluasi berdasarkan variabilitas detak jantung dan pola istirahat.  
- **Riwayat Cedera**: Mencatat cedera sebelumnya yang dapat memengaruhi aktivitas fisik.  
- **Kondisi Kesehatan Khusus**: Informasi penyakit atau kondisi kronis yang perlu diperhatikan selama latihan.    

## **Bagian 3 : Dashboard Control**

### **Data Anggota**  

- **ID Anggota** *(string/int)*  
- **Nama Lengkap** *(string)*  
- **Tanggal Lahir** *(date)*  
- **Jenis Kelamin** *(string: "Laki-laki" / "Perempuan")*  
- **Nomor Telepon** *(string)*  
- **Email** *(string)*  
- **Alamat** *(string)*  
- **Tanggal Bergabung** *(date)*  
- **Status Keanggotaan** *(string: "Aktif" / "Nonaktif")*  

### **Data Kesehatan**  
- **ID Anggota** *(string/int)*  
- **Tinggi Badan (cm)** *(int)*  
- **Berat Badan (kg)** *(int)*  
- **BMI** *(float)*  
- **Tekanan Darah (mmHg)** *(string: "120/80")*  
- **Denyut Jantung (BPM)** *(int)*  
- **Riwayat Cedera** *(string, opsional)*  
- **Kondisi Kesehatan Khusus** *(string, opsional)*  

### **Jadwal Harian**  
- **Hari** *(string: "Senin" - "Minggu")*  
- **Nama Olahraga** *(string)*  
- **Waktu Mulai** *(time)*  
- **Waktu Selesai** *(time)*  
- **Tempat** *(string)*  

### **Jadwal Mingguan**  
- **Minggu Ke-** *(int: 1-4)*  
- **Hari** *(string: "Sabtu" / "Minggu")*  
- **Nama Olahraga** *(string)*  
- **Waktu Mulai** *(time)*  
- **Waktu Selesai** *(time)*  
- **Tempat** *(string)*  
- **Perlengkapan yang Dibutuhkan** *(string, opsional)*  

### **Jadwal Pertandingan & Kompetisi**  
- **ID Kompetisi** *(string/int)*  
- **Nama Kompetisi** *(string)*  
- **Jenis Olahraga** *(string)*  
- **Tanggal Pertandingan** *(date)*  
- **Waktu Pertandingan** *(time)*  
- **Lokasi** *(string)*  
- **Peserta/TIM** *(array of string)*  
- **Status** *(string: "Dijadwalkan" / "Selesai" / "Dibatalkan")*  

### **Ranking Pemain di Tiap Bidang Kompetisi**  
- **ID Pemain** *(string/int)*  
- **Nama Pemain** *(string)*  
- **Bidang Olahraga** *(string)*  
- **Jumlah Pertandingan** *(int)*  
- **Jumlah Menang** *(int)*  
- **Jumlah Kalah** *(int)*  
- **Poin** *(int)*  
- **Ranking** *(int, berdasarkan poin)*
    
## Bagian 4 : Jadwal Latihan Harian

**Senin**

    Kegiatan : Atletik (06:00 – 07:30) & Angkat Beban (19:00 – 21:00)
    Tempat   : Gedung A

**Selasa**

    Kegiatan : Bulu Tangkis (19:00 – 22:00)
    Tempat   : Gedung B

**Rabu**

    Kegiatan : Jalan Sehat (06:30 – 08:30) & Beladiri (19:00 – 21:00)
    Tempat   : Gedung A

**Kamis**

    Kegiatan : Renang (07:00 – 09:00) & Futsal (19:00 – 22:00)
    Tempat   : Gedung B

**Jumat**

    Kegiatan : Senam Sehat (06:30 – 07:30) & Angkat Beban (19:00 – 21:00)
    Tempat   : Gedung A

**Sabtu**

    Kegiatan : Rotasi olahraga sesuai minggu (Bulu Tangkis / Futsal / Renang / Angkat Beban)
    Lokasi   : Sesuaikan dengan tempat yang tersedia

**Minggu**

    Kegiatan : Rotasi olahraga sesuai minggu (Jalan Sehat / Atletik / Senam Sehat / Beladiri)
    Lokasi   : Sesuaikan dengan tempat yang tersedia

## Bagian 5 : Jadwal Latihan Mingguan

    📍 Lokasi  : (Sesuaikan dengan tempat yang tersedia)
    👥 Peserta : Terbuka untuk Umum dan semua Member Organisasi

**Minggu 1 : Bulu Tangkis & Jalan Sehat**

    Sabtu – Bulu Tangkis 🏸
    Waktu        : 19:00 – 22:00
    Tempat       : Ruang Olahraga / GOR Terdekat
    Perlengkapan : Raket Bulu Tangkis, Shuttlecock (disediakan), Pakaian Olahraga

    Minggu – Jalan Sehat 🤸 (Terbuka untuk Umum)
    Waktu        : 06:30 – 08:30
    Tempat       : Area Taman Kota 
    Perlengkapan : Sepatu Olahraga, Pakaian Olahraga

**Minggu 2 : Futsal & Atletik**

    Sabtu – Futsal ⚽
    Waktu        : 19:00 – 22:00
    Tempat       : Lapangan Futsal Indoor/Outdoor
    Perlengkapan : Sepatu Futsal, Pakaian Olahraga

    Minggu – Atletik 🎽 (Terbuka untuk Umum)
    Waktu        : 06:00 – 07:30
    Tempat       : Stadion Atletik / Lapangan Terbuka
    Perlengkapan : Sepatu Atletik, Pakaian Olahraga, Stopwatch
    
**Minggu 3 : Renang & Senam Sehat**

    Sabtu – Renang 🤽🏻‍♂
    Waktu        : 07:00 – 09:00
    Tempat       : Kolam Renang Umum / Klub Renang
    Perlengkapan : Baju Renang, Kacamata Renang

    Minggu – Senam Sehat 🤸 (Terbuka untuk Umum)
    Waktu        : 06:30 – 07:30
    Tempat       : Halaman Kantor / Area Terbuka
    Perlengkapan : Sepatu Training, Pakaian Olahraga
    
**Minggu 4 : Angkat Beban & Beladiri**
    
    Sabtu – Angkat Beban 🏋‍♂ (Terbuka untuk Umum)
    Waktu        : 19:00 – 22:00
    Tempat       : Gym / Area Fitness
    Perlengkapan : Sepatu Training, Pakaian Olahraga

    Minggu – Beladiri 🥋
    Waktu        : 14:00 – 17:00
    Tempat       : Dojo / Ruang Beladiri
    Perlengkapan : Pakaian Beladiri

## **Bagian 6 : Jadwal Pertandingan Kompetisi**

### **🏸 Bulu Tangkis**  
- **Turnamen** : Gammaura Badminton Championship  
- **Format** : Sistem Gugur (Knockout)  
- **Durasi** : 2 Set (Jika imbang, Set ke-3 dimainkan)  
- **Waktu & Tempat**:  
  - **Babak Penyisihan**: Sabtu, 19:00 – 22:00 (GOR Terdekat)  
  - **Semifinal & Final**: Minggu, 19:00 – 22:00 (GOR Terdekat)  

### **⚽ Futsal**  
- **Turnamen**: Gammaura Futsal League  
- **Format**: Liga Poin (Round Robin)  
- **Durasi**: 2 x 15 Menit  
- **Waktu & Tempat**:  
  - **Matchday 1 - 4**: Setiap Sabtu, 19:00 – 22:00 (Lapangan Indoor)  
  - **Semifinal & Final**: Minggu, 19:00 – 22:00 (Lapangan Indoor)  

### **🤽🏻‍♂ Renang**  
- **Turnamen**: Gammaura Swimming Tournament  
- **Format**: Time Trial (Waktu Tercepat)  
- **Kategori**:  
  - 50m Gaya Bebas  
  - 100m Gaya Bebas  
  - 50m Gaya Dada  
  - 50m Gaya Kupu-Kupu  
- **Waktu & Tempat**:  
  - **Babak Penyisihan**: Sabtu, 07:00 – 09:00 (Kolam Renang Umum)  
  - **Final**: Minggu, 07:00 – 09:00 (Kolam Renang Umum)  

### **🥋 Beladiri**  
- **Turnamen**: Gammaura Martial Arts Championship  
- **Format**: Sistem Gugur (Knockout)  
- **Durasi**: 3 Ronde x 2 Menit  
- **Waktu & Tempat**:  
  - **Babak Penyisihan**: Sabtu, 19:00 – 22:00 (Dojo)  
  - **Final**: Minggu, 14:00 – 17:00 (Dojo)  

## **Bagian 7 : Sistem Penilaian dan Peringkat**  

### **⚽ Futsal (Sistem Liga Poin)**
| Hasil Pertandingan  | Poin |
|----------------------|------|
| Menang              | 3 Poin |
| Seri               | 1 Poin |
| Kalah               | 0 Poin |
| Walkover (WO)       | -1 Poin |

**Klasemen Berdasarkan:**
1. Poin Tertinggi  
2. Selisih Gol  
3. Head-to-Head  

---

### **🏸 Bulu Tangkis & 🥋 Beladiri (Sistem Gugur)**  
- Pemenang maju ke babak berikutnya.  
- Jika kalah, peserta langsung gugur.  
- **Peringkat Pemain** dihitung dari:  
  - Juara 1: 100 Poin  
  - Juara 2: 80 Poin  
  - Semifinalis: 60 Poin  
  - Perempat Final: 40 Poin  

---

### **🤽🏻‍♂ Renang (Sistem Time Trial)**
- **Peringkat Berdasarkan Waktu Tercepat**  
- Poin diberikan berdasarkan hasil akhir:  

| Posisi | Poin |
|--------|------|
| Juara 1 | 100 Poin |
| Juara 2 | 80 Poin |
| Juara 3 | 60 Poin |
| Juara 4 | 40 Poin |
| Juara 5 | 20 Poin |

---

## **Bagian 8 : Peringkat Pemain di Tiap Bidang Kompetisi**
Contoh :

## **🏸 Peringkat Bulu Tangkis**  
| Peringkat | Nama Pemain | Jumlah Pertandingan | Menang | Kalah | Poin |
|----------|------------|--------------------|-------|------|------|
| 1️⃣ | Putra | 5 | 4 | 1 | 80 |
| 2️⃣ | Arif | 5 | 3 | 2 | 60 |
| 3️⃣ | Dimas | 4 | 2 | 2 | 40 |
| 4️⃣ | Yuda | 3 | 1 | 2 | 20 |
| 5️⃣ | Rian | 2 | 0 | 2 | 0 |

---

## **⚽ Peringkat Futsal**  
| Peringkat | Nama Pemain | Jumlah Pertandingan | Menang | Kalah | Poin |
|----------|------------|--------------------|-------|------|------|
| 1️⃣ | Rizky | 10 | 7 | 3 | 21 |
| 2️⃣ | Bima | 10 | 6 | 4 | 18 |
| 3️⃣ | Aldi | 9 | 5 | 4 | 15 |
| 4️⃣ | Wahyu | 8 | 4 | 4 | 12 |
| 5️⃣ | Febri | 8 | 3 | 5 | 9 |

---

## **🤽🏻‍♂ Peringkat Renang**  
| Peringkat | Nama Pemain | Jumlah Pertandingan | Waktu Terbaik | Poin |
|----------|------------|--------------------|--------------|------|
| 1️⃣ | Ramdan | 3 | 50.23s | 100 |
| 2️⃣ | Andi | 3 | 52.10s | 80 |
| 3️⃣ | Bayu | 3 | 55.89s | 60 |
| 4️⃣ | Fajar | 2 | 58.30s | 40 |
| 5️⃣ | Hendra | 2 | 1:02.12 | 20 |

---

## **🥋 Peringkat Beladiri**  
| Peringkat | Nama Pemain | Jumlah Pertandingan | Menang | Kalah | Poin |
|----------|------------|--------------------|-------|------|------|
| 1️⃣ | Indra | 6 | 4 | 2 | 60 |
| 2️⃣ | Joko | 6 | 3 | 3 | 40 |
| 3️⃣ | Hadi | 5 | 3 | 2 | 40 |
| 4️⃣ | Satria | 4 | 2 | 2 | 20 |
| 5️⃣ | Reza | 3 | 1 | 2 | 10 |

Berikut adalah contoh data kesehatan pengguna dalam format tabel:  

---

## **Bagian 9 : Data Kesehatan Pengguna**  

Contoh :

| ID Anggota | Nama Lengkap | Tinggi (cm) | Berat (kg) | BMI | Tekanan Darah (mmHg) | Denyut Jantung (BPM) | SpO2 (%) | Riwayat Cedera | Kondisi Kesehatan Khusus |
|-----------|-------------|-------------|-----------|-----|-----------------|-----------------|--------|----------------|------------------------|
| 1001 | Rizky Saputra | 175 | 70 | 22.9 | 120/80 | 75 | 98 | - | - |
| 1002 | Putra Wijaya | 168 | 80 | 28.3 | 130/85 | 78 | 97 | Cedera Lutut | Hipertensi |
| 1003 | Ramdan Hidayat | 180 | 85 | 26.2 | 118/78 | 72 | 99 | - | - |
| 1004 | Indra Pratama | 165 | 60 | 22.0 | 110/75 | 80 | 98 | Pergelangan Tangan | Asma |
| 1005 | Siti Aulia | 158 | 55 | 22.0 | 115/76 | 74 | 99 | - | - |
| 1006 | Bima Arya | 170 | 78 | 27.0 | 125/82 | 77 | 97 | Cedera Engkel | - |
| 1007 | Dinda Safitri | 162 | 50 | 19.1 | 112/74 | 72 | 99 | - | - |
| 1008 | Wahyu Firmansyah | 177 | 90 | 28.7 | 135/88 | 85 | 96 | Cedera Bahu | Hipertensi |
| 1009 | Febri Setiawan | 174 | 68 | 22.5 | 118/79 | 73 | 98 | - | - |
| 1010 | Hendra Kusuma | 169 | 77 | 26.9 | 128/83 | 79 | 97 | Pergelangan Kaki | - |