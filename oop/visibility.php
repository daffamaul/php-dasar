<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Produk
{
    public $judul, $penulis, $penerbit;
    protected $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga})";
        return $str;
    }
}

class Komik extends Produk
{
    private $jumlahHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik: " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman";
        return $str;
    }

    public function getJumlahHalaman()
    {
        return $this->jumlahHalaman;
    }

    public function getHarga()
    {
        return $this->harga;
    }
}


class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
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

$produk1 = new Komik("Doraemon", "Raffi", "Gajah", 20000, 50);
$produk2 = new Game("God Of War", "Daffa", "Elang", 10000, 100);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
// $produk1->harga = 5000;
echo $produk1->getHarga();
