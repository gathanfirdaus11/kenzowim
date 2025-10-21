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
                        <h2 class="card-title text-center">
                            Register
                        </h2>
                        <p class="card-subtitle text-body-secondary mb-3">Daftar Sekarang Dan Jadilah Bagian Dari Kami</p>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" required>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="contoh@gmail.com" required>

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="*******" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                            <p class="text-center mt-3">Sudah Punya Akun? Klik<a href="login.php"> Disini</a> Untuk Login</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>