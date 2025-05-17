<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'inc/koneksi.php';

// Ambil jumlah total barang
$result = mysqli_query($conn, "SELECT COUNT(*) as total FROM tb_inventory");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h2>Selamat datang di Dashboard</h2>
    <p>Total Barang di Gudang: <strong><?= $data['total']; ?></strong></p>
    <a href="barang/list.php">👉 Lihat Data Barang</a> |
    <a href="logout.php">🔒 Logout</a>
</body>

</html>