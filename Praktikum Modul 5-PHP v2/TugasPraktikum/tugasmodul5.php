<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <!-- Memuat file CSS eksternal -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Bagian Header dengan logo dan judul -->
<header>
    <div class="header-content">
        <img src="logostitek.png" alt="Logo STITEK" class="logo">
        <h1>Buku Tamu Digital STITEK Bontang</h1>
    </div>
</header>

<div class="container">
    <?php
    // Inisialisasi variabel
    $nama = $email = $pesan = "";
    $error = "";

    // Cek apakah form disubmit dengan metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi: pastikan semua kolom diisi
        if (empty($_POST["nama"]) || empty($_POST["email"]) || empty($_POST["pesan"])) {
            $error = "Semua kolom wajib diisi.";
        } else {
            // Gunakan htmlspecialchars untuk mencegah XSS
            $nama = htmlspecialchars($_POST["nama"]);
            $email = htmlspecialchars($_POST["email"]);
            $pesan = htmlspecialchars($_POST["pesan"]);

            // Tampilkan pesan konfirmasi jika data valid
            echo "<div class='success'>";
            echo "<strong>Terima kasih telah mengisi buku tamu!</strong><br><br>";
            echo "<strong>Nama:</strong> $nama<br>";
            echo "<strong>Email:</strong> $email<br>";
            echo "<strong>Pesan:</strong><br>" . nl2br($pesan);
            echo "</div>";
        }
    }

    // Tampilkan pesan error jika ada input kosong
    if (!empty($error)) {
        echo "<div class='error'>$error</div>";
    }
    ?>

    <!-- Form Input Buku Tamu -->
    <form method="post" action="">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" name="nama" id="nama"
            value="<?= isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '' ?>">

        <label for="email">Alamat Email:</label>
        <input type="email" name="email" id="email"
            value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">

        <label for="pesan">Pesan / Komentar:</label>
        <textarea name="pesan" id="pesan" rows="5"><?= isset($_POST['pesan']) ? htmlspecialchars($_POST['pesan']) : '' ?></textarea>

        <button type="submit">Kirim Pesan</button>
    </form>
</div>

</body>
</html>
