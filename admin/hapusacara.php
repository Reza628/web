<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

    $stmt = $koneksi->prepare("SELECT foto FROM acara WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama = $row['foto'];

        $nama = basename($nama);

        $imagePath = "img/$nama";

        if (file_exists($imagePath)) {  
            unlink($imagePath);
        }

        $stmt = $koneksi->prepare("DELETE FROM acara WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        echo "<script>alert('Acara terhapus')</script>";
    } else {
        echo "<script>alert('Acara tidak ditemukan')</script>";
    }
} else {
    echo "<script>alert('ID acara tidak valid')</script>";
}

echo "<script>location='index.php?halaman=acara';</script>";
?>
