<?php

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['nama']);

    if (empty($name)) {
        echo 'Nama tidak boleh kosong <br><br>';
        echo '<a href="./validasi.php">Kembali</a>';
    } elseif (strlen($name) < 10) {
        echo 'Nama harus 10 karakter';
    } 
    else {
        echo 'Hallo ' . $name . '!';
    }

}

if (isset($_GET['submit'])) {
    $name = htmlspecialchars($_GET['nama']);
    $jurusan = htmlspecialchars($_GET['jurusan']);

    // && -> merupakan sebuah operator AND dimana keduanya harus bernilai TRUE
    // || -> merupakan sebuah operator OR dimana akan TRUE jika salah satu bernilai TRUE
    if (!empty($name) && !empty($jurusan)) {
        echo 'Nama saya adalah ' . $name . ' dengan mengambil jurusan ' . $jurusan;
    } else {
        echo 'Nama dan jurusan wajib di isi!';
    }

}