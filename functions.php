<?php
function hitungTotalNilaiStok($dataProduk) {
    $totalNilai = 0;
    foreach ($dataProduk as $produk) {
        $totalNilai += $produk['harga'] * $produk['stok'];
    }
    return $totalNilai;
}

function cekWarnaStok($stok) {
    if ($stok < 3) {
        return 'background-color: #ffcccc; color: #a00; font-weight: bold;'; // Warna merah muda untuk stok kritis
    }
    return '';
}