<?php
session_start();
// mendaptkan id produk dari url
$id_item = $_GET['id'];


// jk sudah ada produk itu dikeranjang, maka produk itu jumlahnya di +1 
if (isset($_SESSION['form_beli'][$id_item])) {
    $_SESSION['form_beli'][$id_item] += 1;
}
// selainitu (blm ada di keranjang), mk produk itu dianggap dibeli 1


else {
    $_SESSION['form_beli'][$id_item] = 1;
}



//larikan ke halaman keranjang
echo "<script>location='form_beli.php';</script>";
