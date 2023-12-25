<?php

class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $jumlahHalaman;
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman, $waktuMain)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit}";
        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik: {$this->judul} | {$this->penulis}, {$this->penerbit} - {$this->jumlahHalaman} Halaman";
        return $str;
    }
}


class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game: {$this->judul} | {$this->penulis}, {$this->penerbit} ~ {$this->waktuMain} Jam";
        return $str;
    }
}

$produk1 = new Game("God Of War", "Daffa", "Elang", 123, 0, 100);
$produk2 = new Komik("Doraemon", "Raffi", "Gajah", 100, 100, 0);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
