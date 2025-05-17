<?php
include '../inc/koneksi.php';
include '../inc/header.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_inventory WHERE id_barang = $id"));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    $query = "UPDATE tb_inventory SET kode_barang='$kode', nama_barang='$nama', jumlah_barang=$jumlah, satuan_barang='$satuan', harga_beli=$harga, status_barang=$status WHERE id_barang=$id";
    mysqli_query($conn, $query);
    header("Location: list.php");
}
?>

<h2>Edit Barang</h2>

<form method="post">
    <label>Kode Barang:</label><br>
    <input type="text" name="kode" value="<?= $data['kode_barang'] ?>" required><br><br>

    <label>Nama Barang:</label><br>
    <input type="text" name="nama" value="<?= $data['nama_barang'] ?>" required><br><br>

    <label>Jumlah:</label><br>
    <input type="number" name="jumlah" value="<?= $data['jumlah_barang'] ?>" required><br><br>

    <label>Satuan:</label><br>
    <select name="satuan">
        <option value="pcs" <?= $data['satuan_barang'] == 'pcs' ? 'selected' : '' ?>>pcs</option>
        <option value="kg" <?= $data['satuan_barang'] == 'kg' ? 'selected' : '' ?>>kg</option>
        <option value="liter" <?= $data['satuan_barang'] == 'liter' ? 'selected' : '' ?>>liter</option>
        <option value="meter" <?= $data['satuan_barang'] == 'meter' ? 'selected' : '' ?>>meter</option>
    </select><br><br>

    <label>Harga Beli:</label><br>
    <input type="number" step="0.01" name="harga" value="<?= $data['harga_beli'] ?>" required><br><br>

    <label>Status:</label><br>
    <input type="radio" name="status" value="1" <?= $data['status_barang'] ? 'checked' : '' ?>> Available
    <input type="radio" name="status" value="0" <?= !$data['status_barang'] ? 'checked' : '' ?>> Not Available<br><br>

    <input type="submit" class="btn-custom" value="Update">
</form>

<?php include '../inc/footer.php'; ?>