<?php
$heroes = [
    [
        "name" => "Captain America",
        "powers" => [
            "Superhuman Strength",
            "Superhuman Agility",
            "Superhuman Endurance",
        ],
        "image" => "captain-america.jpg"
    ],
    [
        "name" => "Black Panther",
        "powers" => [
            "Vibranium Suit",
            "Expert Martial Artist",
            "Genius Level Intellect"
        ],
        "image" => "black-panther.jpg"
    ],
    [
        "name" => "Ironman",
        "powers" => [
            "Powered Armor",
            "Flight Capabilities",
            "Superhuman Strength",
        ],
        "image" => "ironman.jpg"
    ],
    [
        "name" => "Spiderman",
        "powers" => [
            "Spider Sense",
            "Web Shooters",
            "Expert Martial Artist",
        ],
        "image" => "spiderman.jpg"
    ],
    [
        "name" => "Deadpool",
        "powers" => [
            "Immortality",
            "Breaks the_Fourth Wall",
            "Master Swordsman"
        ],
        "image" => "deadpool.jpg"
    ],
]
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
    <?php foreach ($heroes as $hero) : ?>
        <ul>
            <li>
                <a href="latihan2.php?image=<?= $hero['image'] ?>&name=<?= $hero['name'] ?>&powers=<?= $hero['powers'][0] ?>">
                    <?= $hero['name'] ?>
                </a>
            </li>
        </ul>
    <?php endforeach ?>
</body>

</html>