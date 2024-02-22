<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Noodles Fitria</h1>
        <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Penyimpanan Berhasil!
        </div>
<?php

}

?>


<?php 

if(@$_GET['pesan']=="hapusBerhasil"){

?>
        <div class="alert alert-success">
        Data Berhasil Dihapus!
        </div>
<?php

}

?>

<?php 

if(@$_GET['pesan']=="editBerhasil"){

?>
        <div class="alert alert-success">
        Perubahan Berhasil!
        </div>
        <?php

}

?>
    

        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>pesanan_id</th><th>Menu</th><th>Harga</th><th>Jumlah</th><th>subharga</th>
                <th>
                <a href="input-menu.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from pesanan order by pesanan_id ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['pesanan_id']?></td>
                <td><?php echo $row['Menu']?></td>
                <td><?php echo $row['Harga']?></td>
                <td><?php echo $row['Jumlah']?></td>
                <td><?php echo $row['subharga']?></td>
                <td>
               
            

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>