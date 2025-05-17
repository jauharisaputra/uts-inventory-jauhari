<?php
include '../inc/koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM tb_inventory WHERE id_barang=$id");
header("Location: list.php");
