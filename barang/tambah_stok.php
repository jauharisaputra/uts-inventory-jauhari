<?php
include '../inc/koneksi.php';
include '../inc/header.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_inventory WHERE id_barang = $id"));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jumlah_tambah = $_POST['jumlah_tambah'];
    $total = $data['jumlah_barang'] + $jumlah_tambah;
    $status = $total > 0 ? 1 : 0;
    mysqli_query($conn, "UPDATE tb_inventory SET jumlah_barang = $total, status_barang = $status WHERE id_barang = $id");
    header("Location: list.php");
}
?>

<h2>Tambah Stok Barang</h2>

<form method="post">
    <label>Nama Barang:</label><br>
    <input type="text" value="<?= $data['nama_barang'] ?>" readonly><br><br>

    <label>Jumlah tersedia: <?= $data['jumlah_barang'] ?></label><br>
    <label>Jumlah yang ditambahkan:</label><br>
    <input type="number" name="jumlah_tambah" min="1" required><br><br>

    <input type="submit" class="btn-custom" value="Tambah Stok">
</form>

<?php include '../inc/footer.php'; ?>