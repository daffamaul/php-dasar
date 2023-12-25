<?php

error_reporting(E_ALL);
ini_set('display_errors', 2);

require './App/init.php';

// $produk1 = new Komik("Doraemon", "Raffi", "Gajah", 20000, 50);
// $produk2 = new Game("God Of War", "Daffa", "Elang", 10000, 100);

// echo $produk1->getInfoProduk();
// echo "<br>";
// echo $produk2->getInfoProduk();
// echo "<hr>";

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();
// echo "<hr>";

use App\Product\User as ProductUser;
use App\Service\User as ServiceUser;

new ProductUser();
echo "<br>";
new ServiceUser();

// new App\Service\User();
// echo "<br>";
// new App\Product\User();
