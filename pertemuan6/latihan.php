<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengelola Data dengan PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <?php
    // Huruf Besar Semua
        // $nama = strtoupper($_GET['nama']) ?? '';
        // Huruf Depan Pertama Besar
        $jurusan = !empty($_GET['jurusan']) ? ucwords($_GET['jurusan']) : '';

        // Hanya huruf paling depan yang akan menjadi besar
        $nama = !empty($_GET['nama']) ? ucfirst($_GET['nama']) : '';

        $nama = ucfirst(strtolower($nama));

        // , . 
        $jurusan = str_replace(' ', '-', $jurusan);
        $jurusan = str_repeat($jurusan, 3);
    ?>

    <h1 class="text-center mt-5">
        Hallo nama saya adalah <?= $nama ?>. Saya adalah seorang mahasiswa <?= $jurusan ?>.
    </h1>

    <!-- METHOD GET -->
    <form action="" class="mt-5" method="get">
        <div class="container">
            <label class="form-label">
                Nama
            </label>
            <input type="text" class="form-control mb-4" name="nama">
            <label class="form-label">
                Jurusan
            </label>
            <input type="text" class="form-control mb-4" name="jurusan">
            <button class="btn btn-primary" name="submit">Submit</button>
        </div>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>