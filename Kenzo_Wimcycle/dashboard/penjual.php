

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

        <div class="row mt-3 mb-5">
            <div class="col-lg-6">
                <div class="card bg-primary text-light">
                    <div class="card-body">
                        <h5 class="card-title">Total Dijual</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card bg-warning text-light">
                    <div class="card-body">
                        <h5 class="card-title">Deskripsi Penjual</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <h2>Data Penjual</h2>
            </div>
        </div>

        <table id="tableSepeda" class="display">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>merek</th>
                    <th>tipe</th>
                    <th>harga</th>
                    <th>gambar</th>
                    <th>deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Id</td>
                    <td>BMX</td>
                    <td>Tipe BMX</td>
                    <td>20000</td>
                    <td>-</td>
                    <td>Sepeda Bmx adalah sepeda untuk Freestyle</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
        <div class="col-12">
            <a href="./index.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>



    <?php include "../includes/footer.php" ?>
    <script src="../jquery.js"></script>
    <script src="../dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script>
        new DataTable("#tableSepeda");
    </script>
</body>


</html>