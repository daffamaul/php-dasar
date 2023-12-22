<?php
$conn = mysqli_connect("localhost", "root", "", "php_dasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
}

function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    // $gambar = htmlspecialchars($data['gambar']);
    $gambar = upload();

    if (!$gambar) {
        return false;
    }


    $query = "INSERT INTO mahasiswa VALUES (NULL, '$nama', $nim, '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];

    if ($error === 4) {
        echo "
            <script>
                alert('silahkan upload gambar!');
            </script>
        ";
        return false;
    }

    if ($ukuran_file > 1000000) {
        echo "
            <script>
                alert('file terlalu besar ukurannya!');
            </script>
        ";
        return false;
    }

    $extension_file_valid = ['jpg', 'png', 'jpeg'];
    $nama_file = explode(".", $nama_file);
    $nama_file = strtolower(end($nama_file));
    if (!in_array($nama_file, $extension_file_valid)) {
        echo "
            <script>
                alert('ekstensi file harus berakhiran jpg/jpeg/png');
            </script>
        ";
        return false;
    }

    $nama_file_baru = uniqid();
    $nama_file_baru .= "." . $nama_file;
    move_uploaded_file($tmp_name, 'img/' . $nama_file_baru);
    return $nama_file_baru;
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $_GET['id'];
    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambar_lama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE mahasiswa SET nama = '$nama', nim = $nim, email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";
    return query($query);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    $result = query("SELECT username FROM user WHERE username = '$username'")[0];

    if ($username === $result['username']) {
        echo "
            <script>
                alert('username telah terdaftar!');
            </script>
        ";
        return false;
    }

    if ($password !== $password2) {
        echo "
            <script>
                alert('password tidak sesuai');
            </script>
        ";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES (NULL, '$username', '$password')");
    return mysqli_affected_rows($conn);
}
