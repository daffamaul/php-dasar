<?php

// Static keyword digunakan untuk:
// 1. Membernya akan terkait dengan class nya bukan pada object (instance)
// 2. Nilai static tidak akan berubah walaupun membuat instance baru
// 3. Membuat kode menjadi procedural
// 4. Digunakan untuk membuat fungsi helper

error_reporting(E_ALL);
ini_set('display_errors', 1);

class ContohStatic
{
    public static $angka = 1;

    public static function halo()
    {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$static1 = new ContohStatic;
$static2 = new ContohStatic;
echo $static1->halo(); // Halo 1 kali
echo $static2->halo(); // Halo 2 kali

// echo ContohStatic::$angka; // 1
// echo ContohStatic::halo(); 
// echo ContohStatic::$angka; // 2
// echo ContohStatic::halo();
// echo ContohStatic::$angka; // 3
// echo ContohStatic::halo();

class ContohNonStatic
{
    public static $angka = 1;
    public function fungsi()
    {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj1 = new ContohNonStatic();
$obj2 = new ContohNonStatic();

echo $obj1->fungsi(); // Halo 1 kali
echo $obj1->fungsi(); // Halo 2 kali
echo $obj1->fungsi(); // Halo 3 kali
echo $obj2->fungsi(); // Halo 4 kali
echo $obj2->fungsi(); // Halo 5 kali
echo $obj2->fungsi(); // Halo 6 kali
