<?php

// define('KEY', value) -> tidak dapat digunakan di class
// define('NAMA', 'Muhamad Daffa Maulana Arrasyid');
// echo NAMA; // Muhamad Daffa Maulana Arrasyid

// const CONSTANT = value -> bisa dipakai diluar class maupun didalam class, tidak dapat menggunakan arrow ketika mengakses, harusnya menggunakan (::)
const NAMA = 'Daffa';
echo NAMA;

class Coba
{
    const NAMA = 'Muhamad Daffa';
}
echo Coba::NAMA; // Muhamad Daffa
$daffa = new Coba;
echo $daffa::NAMA; // Muhamad Daffa


// Magic Constant
// __FILES__
// __DIR__
// __LINES__
// __FUNCTION__
// __CLASS__
// __METHOD__
// __NAMESPACE__
// __TRAIT__