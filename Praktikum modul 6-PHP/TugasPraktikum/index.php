<?php
include 'koneksi.php';
$produk = $conn->query("SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <h2>Daftar Produk</h2>
    <a href="tambah.php">+ Tambah Produk Baru</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $produk->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['id_produk'] ?></td>
            <td><?= $row['nama_produk'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id_produk'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id_produk'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
