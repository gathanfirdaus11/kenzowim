<?php

require_once "../Storage/data_user.php";
require_once "../config/base_config.php";

$email = $_POST['email'];
$password = $_POST['password'];
$user_ditemukan = null;
$email_ditemukan = null;
$pesan_error = [];

// Cek apakah emailnya terdaftar atau tidak
foreach ($data_user as $user) {
    if ($user['email'] == $email) {
        $email_ditemukan = $user['email'];
    }
}

if (!$email_ditemukan) {
    header("Location: $config->BASE_URL/dashboard/login?type=email&error=Email tidak ditemukan");
    return;
}

foreach ($data_user as $user) {
    // Cek Email And Password
    if (
        $user['email'] == $email
        && $user['password'] == md5($password)
    ) {
        $user_ditemukan = $user;
    }
}

if (count($pesan_error) > 0) {
    echo $pesan_error['message'];
    return;
}

if ($user_ditemukan != null) {
    echo "User ditemukan {$user_ditemukan['nama']}";
    session_start();
    $_SESSION['nama'] = $user_ditemukan['nama'];
    header(header: "Location: $config->BASE_URL/dashboard?success=login berhasil, selamat datang {$user_ditemukan['nama']}!");
} else {
    print_r("User tidak ditemukan");
    header("Location: $config->BASE_URL/dashboard/login?error=Login Gagal Cuy");
}
