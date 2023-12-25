<?php

class Car
{
    public $merk;
    public $warna;
    public $harga;

    public function __construct($merk, $warna, $harga)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    public function getMerk()
    {
        return $this->merk;
    }
}

$mobil1 = new Car("BMW", "Merah", 123123);
echo $mobil1->getMerk();
