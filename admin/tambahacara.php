<h2>Tambah Acara</h2>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Acara</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" cols="10"></textarea>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php 
if (isset($_POST['save'])){
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];

    $nama = basename($nama);

    if (move_uploaded_file($lokasi, "img/".$nama)) {
        $stmt = $koneksi->prepare("INSERT INTO acara (nama, harga, deskripsi, foto) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $_POST['nama'], $_POST['harga'], $_POST['deskripsi'], $nama);
        $stmt->execute();

        echo "<div class='alert alert-info'>Data tersimpan</div>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=acara'>";
    } else {
        echo "<div class='alert alert-danger'>Gagal mengunggah foto</div>";
    }
}
?>
