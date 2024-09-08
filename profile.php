<?php
session_start();
include('koneksi.php');

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($koneksi, $query);
$user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <h2>Profil Pengguna</h2>
    <img src="uploads/<?php echo $user['foto']; ?>" alt="Foto Profil">
    <p>Nama Lengkap: <?php echo $user['nama_lengkap']; ?></p>
    <a href="beranda.php">Kembali</a>
</body>
</html>
