
<?php
$mahasiswa = array(
    array("nim" => "25001", "nama" => "Andi", "jurusan" => "Informatika", "nilai" => 85),
    array("nim" => "25002", "nama" => "Budi", "jurusan" => "Sistem Informasi", "nilai" => 75),
    array("nim" => "25003", "nama" => "Citra", "jurusan" => "Informatika", "nilai" => 90),
    array("nim" => "25004", "nama" => "Dina", "jurusan" => "Sistem Informasi", "nilai" => 60)
);

if (isset($_GET["nim"])) {
    $nim = $_GET["nim"];
} else {
    $nim = "";
}

$ditemukan = false;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Detail Mahasiswa</h2>
    <p class="deskripsi">Informasi lengkap mahasiswa.</p>

    <div class="detail-mahasiswa">

        <?php
        foreach ($mahasiswa as $data) {
            if ($data["nim"] == $nim) {
                $ditemukan = true;

                if ($data["nilai"] >= 80) {
                    $grade = "A";
                } else if ($data["nilai"] >= 70) {
                    $grade = "B";
                } else if ($data["nilai"] >= 60) {
                    $grade = "C";
                } else {
                    $grade = "D";
                }

                if ($data["nilai"] >= 70) {
                    $status = "Lulus";
                } else {
                    $status = "Tidak Lulus";
                }
        ?>

        <p><strong>NIM:</strong> <?php echo $data["nim"]; ?></p>
        <p><strong>Nama:</strong> <?php echo $data["nama"]; ?></p>
        <p><strong>Jurusan:</strong> <?php echo $data["jurusan"]; ?></p>
        <p><strong>Nilai:</strong> <?php echo $data["nilai"]; ?></p>
        <p><strong>Grade:</strong> <?php echo $grade; ?></p>
        <p><strong>Status:</strong>
            <?php if ($status == "Lulus") { ?>
                <span class="status-lulus"><?php echo $status; ?></span>
            <?php } else { ?>
                <span class="status-tidak-lulus"><?php echo $status; ?></span>
            <?php } ?>
        </p>

        <?php
        } }

        if ($ditemukan == false) {
            echo "<p>Data mahasiswa tidak ditemukan.</p>";
        }
        ?>

    </div>

    <div class="bagian-tombol">
    <a href="index.php" class="btn-kembali">Kembali</a>
    <a href="form_pesan.php?nim=<?php echo $nim; ?>" class="btn-pesan">Kirim Pesan</a>
</div>

</div>

</body>
</html>
