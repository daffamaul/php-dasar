<?php

class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit}";
        return $str;
    }
}

class Komik extends Produk
{
    public $jumlahHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik: " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman";
        return $str;
    }
}


class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game: " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}

$produk1 = new Game("God Of War", "Daffa", "Elang", 123, 100);
$produk2 = new Komik("Doraemon", "Raffi", "Gajah", 100, 100);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
