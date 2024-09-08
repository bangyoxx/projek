<?php
session_start();
include('koneksi.php');

if (isset($_POST['simpan'])) {
    $user_id = $_SESSION['user_id'];
    $tanggal = $_POST['tanggal'];
    $nama_kegiatan = $_POST['nama_kegiatan'];
    $durasi = $_POST['durasi'];

    $query = "INSERT INTO laporan_kinerja (user_id, tanggal, nama_kegiatan, durasi) 
              VALUES ('$user_id', '$tanggal', '$nama_kegiatan', '$durasi')";
    mysqli_query($koneksi, $query);
    echo "Laporan berhasil disimpan!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kinerja</title>
</head>
<body>
    <h2>Laporan Kinerja</h2>
    <form action="laporan.php" method="POST">
        <label for="tanggal">Tanggal Kegiatan:</label>
        <input type="date" id="tanggal" name="tanggal" required><br><br>

        <label for="nama_kegiatan">Nama Kegiatan:</label>
        <input type="text" id="nama_kegiatan" name="nama_kegiatan" required><br><br>

        <label for="durasi">Durasi Kegiatan:</label>
        <input type="text" id="durasi" name="durasi" required><br><br>

        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>
