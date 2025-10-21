<?php
require_once __DIR__ . "/Storage/data_sepeda.php";
require_once __DIR__ . "/Helpers/filter.php";

use function Helpers\filter_by_id;

$sepeda_id = 0;
if (isset($_GET['id'])) {
    $sepeda_id = (int) $_GET['id'];
}

$data_sepeda = $data_sepeda;

$detail_sepeda = filter_by_id($data_sepeda, $sepeda_id);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sepeda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    
</head>

<body>
    <?php include "./includes/header.php" ?>

    <div class="container-fluid bg-secondary text-light d-flex flex-column align-items-center py-5">
        <h1>Sepeda</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quae.</p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#6c757d" fill-opacity="1" d="M0,192L18.5,181.3C36.9,171,74,149,111,117.3C147.7,85,185,43,222,74.7C258.5,107,295,213,332,250.7C369.2,288,406,256,443,218.7C480,181,517,139,554,154.7C590.8,171,628,245,665,245.3C701.5,245,738,171,775,154.7C812.3,139,849,181,886,170.7C923.1,160,960,96,997,96C1033.8,96,1071,160,1108,186.7C1144.6,213,1182,203,1218,186.7C1255.4,171,1292,149,1329,154.7C1366.2,160,1403,192,1422,208L1440,224L1440,0L1421.5,0C1403.1,0,1366,0,1329,0C1292.3,0,1255,0,1218,0C1181.5,0,1145,0,1108,0C1070.8,0,1034,0,997,0C960,0,923,0,886,0C849.2,0,812,0,775,0C738.5,0,702,0,665,0C627.7,0,591,0,554,0C516.9,0,480,0,443,0C406.2,0,369,0,332,0C295.4,0,258,0,222,0C184.6,0,148,0,111,0C73.8,0,37,0,18,0L0,0Z"></path>
    </svg>


    <!-- Jumbotron3 -->
    <div class="container-fluid bg-light py-3">

        <!-- Container -->
        <div class="container d-flex justify-content-around mt 5">
            <div class="row">

                <?php if ($detail_sepeda): ?>

                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4">
                                <img class="img-fluid" src="<?php echo $detail_sepeda['gambar'] ?>" alt="">
                            </div>
                            <div class="col-lg-8">
                                <h3>
                                    <?php echo $detail_sepeda['merek']; ?>
                                </h3>
                                <h2 class=""><?php echo $detail_sepeda['tipe']; ?></h2>
                                <h3 class=""><?php echo $detail_sepeda['harga']; ?></h3>
                                <p class=""><?php echo $detail_sepeda['deskripsi']; ?></p>
                                <a href="<?php echo  "" ?>" class="btn btn-warning">Masukkan Keranjang</a>
                                <a href="<?php echo  "./kategori.php" ?>" class="btn btn-success">Beli Sekarang</a>
                                <a href="<?php echo  "./sepeda.php" ?>" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <?php foreach ($data_sepeda as $sepeda): ?>
                        <div class="col-12 col-sm-6 col-lg-4 py-3">
                            <div class="card">
                                <img src="https://media.polygonbikes.com/wp-content/uploads/2021/11/14143728/Syncline-C5-BA-P.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $sepeda['merek']; ?></h5>
                                    <h5 class="card-subtitle mb-2 text-body-dark"><?php echo $sepeda['tipe']; ?></h5>
                                    <p class="card-text"><?php echo $sepeda['deskripsi']; ?></p>
                                    <a href="<?php echo  "./sepeda.php?id=" . $sepeda['id'] ?>" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>


            </div>
        </div>
    </div>

    <?php include "./includes/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>