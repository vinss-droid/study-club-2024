<?php

include './koneksi.php';

if (isset($_GET['id'])) {
    // untuk merubah string angka menjadi integer
    $id = intval($_GET['id']);

    $query = mysqli_query($con, 
        // HAPUS SEMUA DATA DARI TABLE todo YANG DIMANA id=$id
        "DELETE FROM todo WHERE id='$id'"
    );

    if ($query) {
        header("location:index.php");
    } else {
        echo '<script>alert("Gagal menyimpan data") window.location.href = "./index.php"</script>';
    }
}