<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Survei</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }

        .text-center i {
            font-size: 3em;
            color: #007bff;
        }

        .text-center h2 {
            color: #343a40;
        }

        .form-group label {
            color: #007bff;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="text-center">
        
        <h2 class="mt-3">Edit Data Survei Pengguna</h2>
    </div>

    <form method="POST" action="proses_survei.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="foto">Masukkan Foto:</label>
            <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*" required>
        </div>

        <div class="form-group">
            <label for="judul">Judul Survei:</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>

        <div class="form-group">
            <label for="tautan">Tautan:</label>
            <input type="text" class="form-control" id="tautan" name="tautan" placeholder="https://example.com">
        </div>

        <button type="submit" class="btn btn-primary">Kirim Survei
        <a href="home.php">
</a>
        </button>
    </form>

    <div class="mt-3">
        <p>Belum punya akun? <a href="daftar.php">Daftar di sini</a></p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
