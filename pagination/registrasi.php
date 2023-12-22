<?php
require 'functions.php';

// error_reporting(E_ALL);
// ini_set("display_errors", 1);

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "
            <script>
                alert('berhasil registrasi');
            </script>
        ";
    } else {
        echo "
            <script>
                alert('gagal registrasi');
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
    <title>Registrasi</title>
</head>

<body>
    <h1>Registrasi</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username: </label>
                <input type="text" name="username" required>
            </li>
            <li>
                <label for="password">password: </label>
                <input type="password" name="password" required>
            </li>
            <li>
                <label for="password2">konfirmasi password: </label>
                <input type="password" name="password2" required>
            </li>
            <li>
                <button type="submit" name="register">Daftar!</button>
            </li>
        </ul>
    </form>
</body>

</html>