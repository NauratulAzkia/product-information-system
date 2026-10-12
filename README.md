# Mini Project 1: Product Information System (Desain)

Aplikasi web berbasis PHP native sederhana untuk sistem informasi manajemen stok dan monitoring produk inventaris gudang (kategori Elektronik).


# Fitur Utama

1. Penyajian Data Produk (Data Presentation)
   - Menampilkan daftar produk elektronik lengkap dengan ID, Nama Produk, Kategori, Harga, Jumlah Stok, dan Deskripsi.
   - Format harga otomatis ke mata uang Rupiah (`Rp number_format`).

2. Monitoring Stok Kritis (Critical Stock Alert)
   - Produk dengan stok kurang dari 3 (`stok < 3`) otomatis ditandai dengan highlight warna merah muda dan label (Kritis!).

3. Perhitungan Total Nilai Aset Gudang (Asset Valuation)
   - Menghitung nilai total inventaris gudang secara dinamis dengan rumus:
     $$\text{Total Nilai Aset} = \sum (\text{Harga} \times \text{Stok})$$


# Struktur File Proyek

index.php     : Tampilan tabel HTML/CSS & pemanggilan logika
products.php  : Array asosiatif daftar produk
functions.php : Fungsi hitung nilai aset & penandaan stok kritis
README.md     : Dokumentasi proyek


# Cara Menjalankan Proyek

Menggunakan XAMPP / Laragon:
1. Pindahkan folder proyek ini ke direktori web server:
   - XAMPP: `C:/xampp/htdocs/`
   - Laragon: `C:/laragon/www/`
2. Jalankan Apache dari panel kontrol.
3. Akses melalui browser (`http://localhost/Mini%20Project%201%20Product%20Information%20System%20(Desain)`).