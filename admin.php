<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    echo "<div class='alert alert-danger'>Anda bukan role admin</div>";
    header('Location:index.php');
    exit; // Tambahkan exit agar header tidak dieksekusi setelah echo
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white bg-primary">
                <h2 class="text-center">Selamat Datang</h2>
            </div>
            <div class="card-body">
                <h1 class="text-center">
                    <?php echo $_SESSION['name']; ?>
                </h1>
            </div>
            <div class="card-footer text-center">
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
