<h2>Data Pembayaran</h2>
<?php
// Mendapatkan id_pembelian dari URL
$id_pembelian = $_GET['id'];
// Mengambil data pembayaran berdasarkan id_pembelian
$ambil = $koneksi->query("SELECT * FROM pembayaran WHERE id_pembelian='$id_pembelian'");
$detail = $ambil->fetch_assoc();
?>
<div class="row">
    <div class="col-md-6">
        <table class="table">
            <!-- Display the payment details here -->
            <tr>
                <th>Nama</th>
                <td><?php echo $detail['nama']; ?></td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td><?php echo $detail['jumlah']; ?></td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td><?php echo $detail['tanggal']; ?></td>
            </tr>
            <!-- Add more details as needed -->
        </table>
    </div>
    <div class="col-md-6">
        <img src="../tiket/bukti/<?php echo $detail['bukti']; ?>" alt="" class="img-responsive">
    </div>
</div>
<form method="post">
    <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="status">
            <option value="">Pilih Status</option>
            <option value="lunas">Lunas</option>
            <option value="batal">Batal</option>
        </select>
    </div>
    <button class="btn btn-primary" name="proses">Proses</button>
</form>

<?php
if (isset($_POST["proses"])) {
    $status = $_POST["status"];
    $koneksi->query("UPDATE pembelian SET status='$status' WHERE id_pembelian='$id_pembelian'");
    echo "<script>alert('Data pembelian terupdate');</script>";
    echo "<script>location='index.php?halaman-pembelian';</script>";
}
?>