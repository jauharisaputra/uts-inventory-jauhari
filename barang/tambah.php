<?php
include '../inc/koneksi.php';
include '../inc/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    $query = "INSERT INTO tb_inventory (kode_barang, nama_barang, jumlah_barang, satuan_barang, harga_beli, status_barang) 
              VALUES ('$kode', '$nama', $jumlah, '$satuan', $harga, $status)";
    mysqli_query($conn, $query);
    header("Location: list.php");
}
?>

<h2>Tambah Barang</h2>

<form method="post">
    <label>Kode Barang:</label><br>
    <input type="text" name="kode" required><br><br>

    <label>Nama Barang:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Jumlah:</label><br>
    <input type="number" name="jumlah" required><br><br>

    <label>Satuan:</label><br>
    <select name="satuan">
        <option value="pcs">pcs</option>
        <option value="kg">kg</option>
        <option value="liter">liter</option>
        <option value="meter">meter</option>
    </select><br><br>

    <label>Harga Beli:</label><br>
    <input type="number" step="0.01" name="harga" required><br><br>

    <label>Status:</label><br>
    <input type="radio" name="status" value="1" checked> Available
    <input type="radio" name="status" value="0"> Not Available<br><br>

    <input type="submit" class="btn-custom" value="Simpan">
</form>

<?php include '../inc/footer.php'; ?>