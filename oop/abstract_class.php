<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Karena class Produk tidak pernah di instantiasi, maka terapkan class abstract

abstract class Produk
{
    protected $judul, $penulis, $penerbit, $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    abstract public function getInfoProduk();

    public function getInfo()
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
        $str = "Komik: " . parent::getInfo() . " - {$this->jumlahHalaman} Halaman";
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
        $str = "Game: " . parent::getInfo() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}

class CetakInfoProduk
{
    public $produks = array();

    public function tambahProduk(Produk $produk)
    {
        $this->produks[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK: <br>";
        foreach ($this->produks as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$produk1 = new Komik("Doraemon", "Raffi", "Gajah", 20000, 50);
$produk2 = new Game("God Of War", "Daffa", "Elang", 10000, 100);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
