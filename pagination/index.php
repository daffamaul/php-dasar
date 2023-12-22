<?php

session_start();
require 'functions.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    die();
}

// Konfigurasi pagination
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

if (isset($_POST['search'])) {
    $mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Mahasiswa</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" autofocus="on" autocomplete="off" placeholder="masukan katak kunci...">
        <button type="submit" name="search">Cari</button>
    </form>
    <br><br>

    <!-- Pagination -->
    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
    <?php endif ?>
    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i ?>" style="color: red;"><?= $i ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i ?>"><?= $i ?></a>
        <?php endif ?>
    <?php endfor ?>
    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
    <?php endif ?>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $nomor = 1 ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td style="text-align:center"><?= $nomor ?></td>
                <td>
                    <a href="hapus.php?id=<?= $mhs['id'] ?>" onclick="return confirm('yakin?')">hapus</a> |
                    <a href="ubah.php?id=<?= $mhs['id'] ?>">ubah</a>
                </td>
                <td><img src=" img/<?= $mhs['gambar'] ?>" width="50" alt="" style="display: block; margin: auto;"></td>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['email'] ?></td>
                <td><?= $mhs['jurusan'] ?></td>
            </tr>
            <?php $nomor++ ?>
        <?php endforeach ?>
    </table>
</body>

</html>