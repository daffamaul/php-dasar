<?php
require 'functions.php';
if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">nama: </label>
                <input type="text" name="nama" required>
            </li>
            <li>
                <label for="nim">nim: </label>
                <input type="number" name="nim" required>
            </li>
            <li>
                <label for="email">email: </label>
                <input type="email" name="email" required>
            </li>
            <li>
                <label for="jurusan">jurusan: </label>
                <input type="text" name="jurusan" required>
            </li>
            <li>
                <label for="gambar">gambar: </label>
                <input type="text" name="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
    <a href="index.php">Ke halaman utama</a>
</body>

</html>