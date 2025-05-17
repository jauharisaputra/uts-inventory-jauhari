<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inventory System</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <div class="navbar">
        <div class="container">
            <h1 class="navbar-brand"><a href="../dashboard.php" style="text-decoration: none; color: white;">Inventory
                    Dashboard</a></h1>
            <div class="nav-links">
                <a href="../dashboard.php">Dashboard</a>
                <a href="../barang/list.php">Data Barang</a>
                <a href="../logout.php">Logout</a>
            </div>
        </div>
    </div>

    <div class="container">