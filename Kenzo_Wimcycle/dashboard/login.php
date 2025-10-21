<?php

require_once "../Storage/data_sepeda.php";
require_once "../config/base_config.php";

$pesan_error = "";
$error_type = "";
if (isset($_GET['error'])) {
    $pesan_error = $_GET['error'];
}

if (isset($_GET['type'])) {
    $error_type = $_GET['type'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../dataTables.dataTables.css">
</head>

<body>
    <?php include "../includes/header.php" ?>

    <div class="container">
        <div class="row ">
            <div class="col-12 vh-100 d-flex justify-content-center align-items-center">
                <div class="card" class="max-width: 32rem; max-height: fit-content;">
                    <div class="card-body">
                        <h2 class="card-title text-center">Login</h2>
                        <?php if ($pesan_error): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Login Gagal</strong> Email atau password salah, <?php echo $pesan_error ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <p class="card-subtitle text-body-secondary mb-3">Login Sekarang Untuk Mendapatkan Fitur Lainnya</p>
                        <form method="POST" action="<?php echo $config->BASE_URL; ?>/controller/handle-login">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input
                                    style="<?php if ($error_type == "email") {
                                                echo "border-color: red";
                                            } ?>"
                                    name="email" type="email" class="form-control" placeholder="contoh@gmail.com" required>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" placeholder="*******" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                            <p class="text-center mt-3">Belum Punya Akun? Klik<a href="register.php"> Disini</a> Untuk Register</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>


</html>