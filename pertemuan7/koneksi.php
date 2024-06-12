<?php

$hostName = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'sc_todolist';

$con = mysqli_connect($hostName, $username, $password, $databaseName);

// if ($con) {
//     echo 'Berhasil koneksi ke database';
// } else {
//     echo 'Gagal koneksi ke database';
// }