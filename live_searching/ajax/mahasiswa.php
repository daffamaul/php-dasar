<?php
require '../functions.php';

$keyword = $_GET['keyword'];
$mahasiswa = cari($keyword);

?>

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