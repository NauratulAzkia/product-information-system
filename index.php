<?php
// index.php - Presentation Layer
require_once 'products.php';
require_once 'functions.php';

$totalAset = hitungTotalNilaiStok($products);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project 1: Product Information System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f9f9f9;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .alert-info {
            margin-top: 20px;
            padding: 15px;
            background-color: #e2f0d9;
            border: 1px solid #c3e6cb;
            color: #155724;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h2>Product Information System - Manajemen Gudang</h2>
    <p>Daftar komoditas produk dan monitoring stok gudang (Stok kritis ditandai warna merah jika &lt; 3).</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga (Rp)</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $item): ?>
                <?php $styleStok = cekWarnaStok($item['stok']); ?>
                <tr style="<?php echo $styleStok; ?>">
                    <td><?php echo htmlspecialchars($item['id']); ?></td>
                    <td><?php echo htmlspecialchars($item['nama']); ?></td>
                    <td><?php echo htmlspecialchars($item['kategori']); ?></td>
                    <td>Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></td>
                    <td>
                        <?php echo $item['stok']; ?>
                        <?php if ($item['stok'] < 3): ?>
                            <span>(Kritis!)</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo htmlspecialchars($item['deskripsi']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="alert-info">
        <strong>Total Nilai Aset Gudang:</strong> Rp <?php echo number_format($totalAset, 0, ',', '.'); ?>
    </div>

</body>
</html>