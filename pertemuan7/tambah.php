<?php 
    include './koneksi.php';
    date_default_timezone_set('Asia/Jakarta');

    if (isset($_POST['simpan'])) {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $tgl = date('Y-m-d H:i:s');

        $query = mysqli_query($con, 
        // definisikan field secara berurut : id,judul,deskripsi,tanggal_buat
            "INSERT INTO todo 
            VALUES(NULL, '$judul', '$deskripsi', '$tgl')"
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
            <input type="text" class="form-control" name="judul">
        </div>
        <div class="mb-4">
            <label class="form-label">
                Deskripsi
            </label>
            <textarea type="text" class="form-control" name="deskripsi"></textarea>
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