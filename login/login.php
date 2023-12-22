<?php

require 'functions.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = query("SELECT * FROM user WHERE username = '$username'")[0];

    if ($result) {
        if (password_verify($password, $result['password'])) {
            header("Location: index.php");
            die();
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <?php if ($error) : ?>
        <p style="color: red; font-style: italic;">username / password salah</p>
    <?php endif ?>
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
                <button type="submit" name="login">login</button>
            </li>
        </ul>
    </form>
</body>

</html>