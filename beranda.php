<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $_SESSION['username']; ?></h2>
    <ul>
        <li><a href="beranda.php">Beranda</a></li>
        <li><a href="laporan.php">Laporan</a></li>
        <li><a href="profil.php">Data Diri</a></li>
        <li><a href="logout.php">Keluar</a></li>
    </ul>
</body>
</html>
