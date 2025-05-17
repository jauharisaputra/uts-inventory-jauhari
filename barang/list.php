<?php
include '../inc/koneksi.php';
include '../inc/header.php';

$query = mysqli_query($conn, "SELECT * FROM tb_inventory");
?>

<h2>Data Inventory Barang</h2>

<a href="tambah.php" class="btn-custom">Tambah Barang</a>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Harga Beli</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>
                <td>{$no}</td>
                <td>{$row['kode_barang']}</td>
                <td>{$row['nama_barang']}</td>
                <td>{$row['jumlah_barang']}</td>
                <td>{$row['satuan_barang']}</td>
                <td>Rp " . number_format($row['harga_beli'], 2, ',', '.') . "</td>
                <td>" . ($row['status_barang'] ? '<span style=\"color:green; font-weight:bold;\">Available</span>' : '<span style=\"color:red; font-weight:bold;\">Not Available</span>') . "</td>
                <td>
                    <div style='display: flex; flex-wrap: wrap; gap: 6px;'>
                        <a href='edit.php?id={$row['id_barang']}' class='btn-custom'>Edit</a>
                        <a href='hapus.php?id={$row['id_barang']}' class='btn-custom' onclick=\"return confirm('Yakin ingin hapus?')\">Hapus</a>
                        <a href='pakai.php?id={$row['id_barang']}' class='btn-custom'>Pakai</a>
                        <a href='tambah_stok.php?id={$row['id_barang']}' class='btn-custom'>Tambah Stok</a>
                    </div>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </tbody>
</table>

<?php include '../inc/footer.php'; ?>