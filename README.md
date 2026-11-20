# KEMUDI_KBMDSI
Analisis dan Perancangan Sistem Monitoring Kinerja Pengurus KBMDSI (KEMUDI: Kontrol Evaluasi dan Monitoring Utama Data Sistem Internal KBMDSI)

---

# KEMUDI HUB — Web Portal Manajemen Proker & Keuangan KBMDSI FILKOM UB
**Kabinet ImagiNesa 2026/2027**

Implementasi halaman web responsif desktop berbasis Figma Design Sistem Informasi FILKOM Universitas Brawijaya.

---

## 🌟 Fitur Utama

1. **Desain Desktop Responsif & Proporsional**:
   - Disesuaikan khusus untuk resolusi desktop (1280px, 1440px, hingga 1920px widescreen).
   - Layout proporsional dengan sidebar permanen 280px dan area konten dinamis 12-kolom.

2. **Halaman 1: Manajemen Program Kerja (Proker)**:
   - **4 Metric Cards**: Total Proker (12), Sedang Berjalan (08), Terlewat/Disahkan (04), Pagu Terserap (72.1%).
   - **Banner Kepatuhan SOP LPJ/LAK**: Desain emerald khas himpunan dengan aksi langsung membaca SOP dan unggah draf LPJ.
   - **Filter Multi-Kategori**: Tab filter per divisi (Keilmuan, PSDM, Pengmas, Litbang, Humas, BPH), pencarian langsung (*live search*), filter status, dan sorting.
   - **Daftar Proker Interaktif**: Tabel program kerja lengkap dengan kode unik, PIC, pagu, progres bar real-time, dan status badge resmi.
   - **Alur Birokrasi & Standarisasi LPJ DPA**: 4 tahapan birokrasi M-10 sampai H+14 beserta tombol unduh paket template ZIP.
   - **Tenggat LPJ Terdekat**: Pemantauan batas akhir H-3 dan tombol trigger ingatkan PIC via WhatsApp gateway.

3. **Halaman 2: Kas, Iuran & Keuangan Organisasi**:
   - **Ringkasan Finansial**: Total Pemasukan (+18.4% MoM), Total Pengeluaran (29.1% pagu), dan Saldo Kas Riil (Surplus Sehat Rasio 70.8%).
   - **Buku Mutasi Kas Terkini**: Pembukuan debit/kredit dengan filter tab *Semua*, *Masuk*, dan *Keluar*.
   - **Grafik Komparasi Arus Kas Mingguan**: Visualisasi interaktif Chart.js bar chart perbandingan Inflow vs Outflow tiap minggu.
   - **Pelacak Iuran Pengurus**: Bar persentase 82% terkumpul (41/50 pengurus), daftar nama pengurus dengan status Lunas/Belum Bayar, dan tombol broadcast reminder.
   - **Virtual Bank Card & QRIS**: Kartu giro resmi Bank Mandiri KBMDSI dengan fitur 1-klik copy rekening dan QRIS Standar Nasional.

4. **Fitur Tambahan**:
   - Modal interaktif untuk tambah proker, input transaksi, baca SOP lengkap, unggah file LPJ, dan ekspor data (XLSX / PDF).
   - Sistem notifikasi Toast dinamis untuk setiap interaksi pengguna.

---

## 🚀 Cara Menjalankan

### Opsi 1: Langsung Buka di Browser
Anda cukup membuka file `index.html` langsung di browser:
- Buka file `index.html` dengan Chrome atau Edge.

### Opsi 2: Menggunakan Laravel (website/)
Proyek ini juga sudah terintegrasi ke dalam aplikasi Laravel di folder `website/`:
```bash
cd website
composer install
php artisan serve
```
Buka `http://localhost:8000` di browser.
