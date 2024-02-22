<?php

$id=$_POST['pesanan_id'];
$Menu=$_POST['Menu'];
$Harga=$_POST['Harga'];
$Jumlah=$_POST['Jumlah'];
$subharga=$_POST['subharga'];

include "koneksi.php";

$simpan=$koneksi->query("update pesanan set pesanan_id ='$id', Menu='$Menu', Harga='$Harga', Jumlah='$Jumlah', subharga=$subharga where pesanan='$id'");
                       
if($simpan==true){

    header("location:tampil-menu.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>