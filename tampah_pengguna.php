<?php
session_start();
include('koneksi.php');

if (isset($_POST['tambah'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama_lengkap = $_POST['nama_lengkap'];
    $role = $_POST['role'];

    $query = "INSERT INTO users (username, password, nama_lengkap, role) 
              VALUES ('$username', '$password', '$nama_lengkap', '$role')";
    mysqli_query($koneksi, $query);
    echo "Pengguna baru berhasil ditambahkan!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna Baru</title>
</head>
<body>
    <h2>Tambah Pengguna Baru</h2>
    <form action="tambah_pengguna.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br><br>

        <label for="role">Role:</label>
        <select id="role" name="role">
            <option value="pegawai">Pegawai</option>
            <option value="admin">Admin</option>
        </select><br><br>

        <button type="submit" name="tambah">Tambah Pengguna</button>
    </form>
</body>
</html>
