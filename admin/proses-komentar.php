
<?php

include "koneksi.php";
$nama = $koneksi->real_escape_string($_POST['nama']); 
$email = $koneksi->real_escape_string($_POST['email']); 
$nohandphone= $koneksi->real_escape_string($_POST['nohandphone']); 
$pesan= $koneksi->real_escape_string($_POST['pesan']); 


$simpan=$koneksi->query("insert into komentar(nama,email,nohandphone,pesan) 
                        values ('$nama','$email','$nohandphone','$pesan')");

if($simpan==true){

    header("location:contact.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>