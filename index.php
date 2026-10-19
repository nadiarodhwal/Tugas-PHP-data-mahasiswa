
<?php
$mahasiswa = array(
    array("nim" => "25001", "nama" => "Riska", "jurusan" => "PSTI", "nilai" => 85),
    array("nim" => "25002", "nama" => "Tiara", "jurusan" => "MKB", "nilai" => 75),
    array("nim" => "25003", "nama" => "Bhanu", "jurusan" => "SISTEL", "nilai" => 90),
    array("nim" => "25004", "nama" => "Fadhil", "jurusan" => "PSTI", "nilai" => 60)
);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Data Mahasiswa</h2>
    <p class="deskripsi">Daftar nilai dan status kelulusan mahasiswa.</p>

    <table class="tabel-mahasiswa">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>
    
    <?php
        foreach ($mahasiswa as $data) {
            if ($data ["nilai"] >= 80) {
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

        <tr>
            <td><?php echo $data["nim"]; ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["jurusan"]; ?></td>
            <td><?php echo $data["nilai"]; ?></td>
            <td><?php echo $grade; ?></td>
            <td>
                <?php if ($status == "Lulus") { ?>
                    <span class="status-lulus"><?php echo $status; ?></span>
                <?php } else { ?>
                    <span class="status-tidak-lulus"><?php echo $status; ?></span>
                <?php } ?>
            </td>
            <td>
                <a class="btn-detail" href="detail.php?nim=<?php echo $data['nim']; ?>">Detail</a>
            </td>
        </tr>

        <?php
        }
        ?>
    </table>

</body>
</html>
