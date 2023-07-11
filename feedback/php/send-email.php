<?php
include "koneksi.php";

if(isset($_POST['btnSimpan'])){
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query="insert into feedback(Nama,Email,Pesan)values('$nama','$email','$message')";

    $equery=$condb->query($query);
    // header("location:view_mahasiswa.php");
    if ($query) { echo "OK"; }

}else{

}





?>