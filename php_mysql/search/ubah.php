<?php
require 'functions.php';

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST['submit'])) {
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
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
    <title>Ubah Mahasiswa</title>
</head>

<body>
    <h1>Ubah Mahasiswa</h1>
    <form action="" method="post">
        <input type="hidden" value="<?= $mhs['id'] ?>">
        <ul>
            <li>
                <label for="nama">nama: </label>
                <input type="text" name="nama" value="<?= $mhs['nama'] ?>" required>
            </li>
            <li>
                <label for="nim">nim: </label>
                <input type="number" name="nim" value="<?= $mhs['nim'] ?>" required>
            </li>
            <li>
                <label for="email">email: </label>
                <input type="email" name="email" value="<?= $mhs['email'] ?>" required>
            </li>
            <li>
                <label for="jurusan">jurusan: </label>
                <input type="text" name="jurusan" value="<?= $mhs['jurusan'] ?>" required>
            </li>
            <li>
                <label for="gambar">gambar: </label>
                <input type="text" name="gambar" value="<?= $mhs['gambar'] ?>" required>
            </li>
            <li>
                <button type="submit" name="submit" onclick="return confirm('yakin?')">Ubah</button>
            </li>
        </ul>
    </form>
    <a href="index.php">Ke halaman utama</a>
</body>

</html>