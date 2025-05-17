<?php
include '../inc/koneksi.php';
include '../inc/header.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_inventory WHERE id_barang = $id"));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jumlah_pakai = $_POST['jumlah_pakai'];
    if ($jumlah_pakai > $data['jumlah_barang']) {
        echo "<p style='color:red;'>Jumlah pemakaian melebihi stok!</p>";
    } else {
        $sisa = $data['jumlah_barang'] - $jumlah_pakai;
        $status = $sisa == 0 ? 0 : 1;
        mysqli_query($conn, "UPDATE tb_inventory SET jumlah_barang = $sisa, status_barang = $status WHERE id_barang = $id");
        header("Location: list.php");
    }
}
?>

<h2>Pakai Barang</h2>

<form method="post">
    <label>Nama Barang:</label><br>
    <input type="text" value="<?= $data['nama_barang'] ?>" readonly><br><br>

    <label>Jumlah tersedia: <?= $data['jumlah_barang'] ?></label><br>
    <label>Jumlah yang dipakai:</label><br>
    <input type="number" name="jumlah_pakai" min="1" max="<?= $data['jumlah_barang'] ?>" required><br><br>

    <input type="submit" class="btn-custom" value="Gunakan">
</form>

<?php include '../inc/footer.php'; ?>