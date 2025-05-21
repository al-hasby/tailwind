<?php
session_start();
if(!isset ($_SESSION['saldo'])){
    $_SESSION['saldo'] = 500000;
}

$saldo= $_SESSION['saldo'];
$produk=$_POST['nigga'];
$harga=$_POST['harga'];

if($_SESSION['saldo']< $harga) {
    echo "saldo anda tidak cukup";
}else{
    $_SESSION['saldo'] = $saldo - $harga;
    echo "bedak di jamin manjur meredakan apapun" . $produk . "seharga" . $harga ;
    
    
    echo "saldo anda :" . $saldo = $_SESSION['saldo'];
}

echo "<br> <a href='toko.php'>kembali ke toko</a>"

?>

