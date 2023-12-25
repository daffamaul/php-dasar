<?php

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
