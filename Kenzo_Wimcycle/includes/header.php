<?php



session_start();
$user = "";
if (isset($_SESSION['name'])) {
    $user = $_SESSION['name'];
}



?>





<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">Wimcycle</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sepeda.php">Sepeda</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="kategori.php?tipe=BMX">BMX</a></li>
                        <li><a class="dropdown-item" href="kategori.php?tipe=Gunung">Sepeda Gunung</a></li>
                        <li><a class="dropdown-item" href="kategori.php?tipe=Ontel">Ontel</a></li>
                        <li>
                            <hr class="dropdown-divider-light">
                        </li>
                        <li><a class="dropdown-item" href="kategori.php">Lihat Semua</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['nama'])): ?>
                        <a class="btn btn-danger" href="<?php echo $config->BASE_URL ?>/controller/handle-logout">logout</a>
                    <?php else: ?>
                        <a class="btn btn-primary" href="<?php echo $config->BASE_URL ?>/dashboard/login">Login</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>