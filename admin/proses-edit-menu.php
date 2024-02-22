<?php

$id=$_POST['pesanan_id'];
$Menu=$_POST['Menu'];
$Harga=$_POST['Harga'];
$Jumlah=$_POST['Jumlah'];
$subharga=$_POST['subharga'];

include "koneksi.php";

$simpan=$koneksi->query("update pesanan set pesanan_id ='$id', Menu='$Menu', Harga='$Harga', Jumlah='$Jumlah', subharga=$subharga where pesanan_id='$id'");
                       
if($simpan==true){

    header("location:pesanan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>