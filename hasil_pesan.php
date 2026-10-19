
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Pesan Berhasil Dikirim</h2>
    <p class="deskripsi">Berikut adalah informasi pesan yang kamu kirim.</p>

    <div class="hasil-pesan">
        <?php
        if (isset($_POST["nama"]) && isset($_POST["kelas"]) && isset($_POST["pesan"])) {
            $nama = $_POST["nama"];
            $kelas = $_POST["kelas"];
            $pesan = $_POST["pesan"];

            echo "<p><strong>Nama:</strong> " . $nama . "</p>";
            echo "<p><strong>Kelas:</strong> " . $kelas . "</p>";
            echo "<p><strong>Pesan:</strong> " . $pesan . "</p>";
        } else {
            echo "Silakan isi formulir terlebih dahulu.";
        }
        ?>
    </div>

    <div class="bagian-tombol">
        <a href="form_pesan.php" class="btn-kembali">Kembali ke Form Pesan</a>
        <a href="index.php" class="btn-pesan">Kembali ke Data Mahasiswa</a>
    </div>

</div>

</body>
</html>