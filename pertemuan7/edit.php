<?php 
    include './koneksi.php';

    // url?id
    if (isset($_GET['id'])) {
        // untuk merubah string angka menjadi integer
        $id = intval($_GET['id']);

        $query = mysqli_query($con, 
            // AMBIL SEMUA DATA DARI TABLE todo YANG DIMANA id=$id
            "SELECT * FROM todo WHERE id='$id'"
        );

        // untuk merubah array object database menjadi array object biasa
        $data = mysqli_fetch_assoc($query);
    }

    if (isset($_POST['simpan'])) {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];

        $query = mysqli_query($con, 
        // definisikan field secara berurut : id,judul,deskripsi,tanggal_buat
            "UPDATE todo SET judul='$judul', deskripsi='$deskripsi' WHERE id='$id'"
        );

        if ($query) {
            header("location:index.php");
        } else {
            echo '<script>alert("Gagal menyimpan data") window.location.href = "./index.php"</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
<div class="container mt-5">
    <a href="./index.php" class="btn btn-primary">Kembali</a> 
    <br><br>

    <form action="" method="post">
        <div class="mb-4">
            <label class="form-label">
                Judul
            </label>
            <input type="text" class="form-control" name="judul" value="<?= $data['judul'] ?>">
        </div>
        <div class="mb-4">
            <label class="form-label">
                Deskripsi
            </label>
            <textarea type="text" class="form-control" name="deskripsi"><?= $data['deskripsi'] ?></textarea>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary" name="simpan">
                Simpan
            </button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>