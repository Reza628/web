<?php
require('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Membersihkan input ID
    $id = filter_var($id, FILTER_SANITIZE_STRING);

    $stmt = $koneksi->prepare("DELETE FROM feedback WHERE Nama = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Berhasil terhapus')</script>";
    } else {
        echo "<script>alert('Gagal menghapus ')</script>";
    }
} else {
    echo "<script>alert('tidak valid')</script>";
    echo "<meta http-equiv='refresh' content='0;url=akun.php'>";
}
echo "<script>location='index.php?halaman=feedback';</script>";

?>
