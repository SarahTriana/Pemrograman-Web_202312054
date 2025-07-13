<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM produk WHERE id_produk=$id")->fetch_assoc();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $conn->query("UPDATE produk SET nama_produk='$nama', harga=$harga, stok=$stok WHERE id_produk=$id");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <form method="POST">
        Nama Produk: <input type="text" name="nama_produk" value="<?= $data['nama_produk'] ?>" required><br><br>
        Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>" required><br><br>
        Stok: <input type="number" name="stok" value="<?= $data['stok'] ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>