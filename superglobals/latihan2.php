<?php
if (
    !isset($_GET["name"]) ||
    !isset($_GET["image"]) ||
    !isset($_GET["powers"])
) {
    header("Location: latihan1.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>

<body>
    <h1>Heroes list</h1>
    <ul>
        <li><img src="../img/<?= $_GET["image"] ?>" alt=""></li>
        <li>Name: <?= $_GET["name"] ?></li>
        <li>Favorite Powers: <?= $_GET['powers'] ?></li>
    </ul>
    <a href="latihan1.php">Back</a>
</body>

</html>