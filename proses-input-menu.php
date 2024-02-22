<?php

$id=$_POST['pesanan_id'];
$Menu=$_POST['Menu'];
$Harga=$_POST['Harga'];
$Jumlah=$_POST['Jumlah'];
$subharga=$_POST['subharga'];

include "koneksi.php";

$simpan=$koneksi->query("insert into pesanan(pesanan_id,Menu,Harga,Jumlah,subharga) 
                        values ('$pesanan_id', '$Menu', '$Harga', '$Jumlah', '$subharga')");

if($simpan==true){

    header("location:tampil-menu.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>