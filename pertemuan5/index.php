<?php

// membuat variable kita gunakan $ pada awalan sebelum mendeklarasikan nama variablenya.

$nama = 'Kevin';

$umur = 20;

echo 'Nama saya adalah : ' . $nama . '<br>';
echo 'Umur saya adalah : ' . $umur . '<br><br>';

$nama = 100;
$umur = 'Kevin';

echo 'Nama saya adalah : ' . $nama . '<br>';
echo 'Umur saya adalah : ' . $umur . '<br><br>';

// ini bisa menampilkan sebuah value dan juga sebuah tipe data dari variable tersebut. Ini cuman digunakan hanya untuk debugging.
var_dump($nama);
var_dump($umur);