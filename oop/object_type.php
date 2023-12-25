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

class GetAllInfo
{
    public function print(Car $object)
    {
        $str = "{$object->merk}, {$object->warna}, {$object->harga}";
        return $str;
    }
}

$mobil1 = new Car("BMW", "Merah", 123123);
$getInfoCar = new GetAllInfo();
echo $getInfoCar->print($mobil1);
