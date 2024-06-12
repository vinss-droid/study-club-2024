<?php 
    include './koneksi.php';
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
    <a href="./tambah.php" class="btn btn-primary">Tambah</a> 
    <br><br>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal Buat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $todos = mysqli_query($con, 
                    'SELECT * FROM todo'
                );

                while ($todo = mysqli_fetch_assoc($todos)) :
            ?>

            <tr>
                <td><?= $todo['id'] ?></td>
                <td><?= $todo['judul'] ?></td>
                <td><?= $todo['deskripsi'] ?></td>
                <td>
                    <?= date('d F Y H:i', strtotime($todo['tanggal_buat'])) ?>
                </td>
                <td>
                    <a href="./edit.php?id=<?= $todo['id'] ?>" class="btn btn-warning">
                        Ubah
                    </a>
                    <a href="./hapus.php?id=<?= $todo['id'] ?>" class="btn btn-danger">
                        Hapus
                    </a>
                </td>
            </tr>

            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>