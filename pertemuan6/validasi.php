<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Formulir</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <!-- METHOD POST -->
    <form action="./proses.php" class="mt-5" method="post">
        <div class="container">
            <label class="form-label">
                Nama
            </label>
            <input type="text" class="form-control mb-4" name="nama">
            <button class="btn btn-primary" name="submit">Submit</button>
        </div>
    </form>


    <!-- METHOD GET -->
    <form action="./proses.php" class="mt-5" method="get">
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