<?php
if (isset($_POST['submit'])) {
    if ($_POST['username'] === 'admin' && $_POST['password'] === '123') {
        header("Location: admin.php");
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin</title>
</head>

<?php if (isset($error)) : ?>
    <p style="color: red; font-style: italic;">username / password salah</p>
<?php endif ?>

<body>
    <form method="post">
        <label for="username">username: </label>
        <input type="text" name="username">
        <br><br>
        <label for="password">password: </label>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>