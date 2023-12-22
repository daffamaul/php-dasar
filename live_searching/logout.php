<?php

session_start();
session_destroy();

setcookie('id', '', time() - 60 * 60);
setcookie('key', '', time() - 60 * 60);

header("Location: login.php");
