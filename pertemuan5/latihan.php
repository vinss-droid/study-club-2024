<?php

$nama = 'Kevin';
$nilai_uts = 80;
$nilai_uas = 90;

// array biasa
$dataSiswa = ['Delvin', 80, 70];
// $dataSiswa[0]

$buah = array('Anggur', 'Pisang', 'Melon', 'Kelapa', 'Jeruk');

// array dengan key
$data = [
    'nama' => 'Dani',
    'nilai_uts' => 90,
    'nilai_uas' => 90
];

// var_dump($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Menampilkan data di PHP</title>
</head>
<body>

    <h1>
        Nama saya adalah <?= $nama ?>
    </h1>
    <h1>
        Nilai UTS saya adalah <?= $nilai_uts ?>
    </h1>
    <h1>
        Nilai UAS saya adalah <?= $nilai_uas ?>
    </h1>

    <br><br>

    <h1>
        Nama saya adalah <?= $data['nama'] ?>
    </h1>
    <h1>
        Nilai UTS saya adalah <?= $data['nilai_uts'] ?>
    </h1>
    <h1>
        Nilai UAS saya adalah <?= $data['nilai_uas'] ?>
    </h1>

    <ul>
        <?php foreach ($buah as $item) : ?>
            <li>
                <?= $item ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>