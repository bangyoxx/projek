<?php
$koneksi = mysqli_connect("localhost", "root", "", "pelaporan_kinerja");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>
