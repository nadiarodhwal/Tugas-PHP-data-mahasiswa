
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Form Pesan</h2>
    <p class="deskripsi">Silakan isi formulir berikut untuk mengirim pesan.</p>

    <form action = "hasil_pesan.php" method = "POST" class = "form-pesan">

        <label>Nama:</label>
        <input type= "text" name ="nama" placeholder = "Masukkan nama kamu" required>

        <label>Kelas:</label>
        <input type ="text" name= "kelas" placeholde r= "Masukkan kelas kamu" required>

        <label>Pesan:</label>
        <textarea name = "pesan" rows = "5" placeholder = "Tuliskan pesan kamu di sini" required></textarea>

        <div class = "bagian-tombol">
            <button type = "submit">Kirim</button>
            <a href = "index.php" class = "btn-kembali">Kembali</a>
        </div>

    </form>
</div>
</body>
</html>
