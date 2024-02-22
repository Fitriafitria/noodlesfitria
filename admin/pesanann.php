<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Menu</h1>
        <h1><strong><align><p><a class="btn btn-warning" href="index.php" role="button">Back</a></i></align></strong></h1>
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



?>
    

        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th><th>Menu</th><th>Harga</th><th>Jumlah</th><th>subharga</th>
                <th>
                    <a href="input-menu.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <body>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from pesanan order by Menu");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['pesanan_id']?></td>
                <td><?php echo $row['Menu']?></td>
                <td><?php echo $row['Harga']?></td>
                <td><?php echo $row['Jumlah']?></td>
                <td><?php echo $row['subharga']?></td>
                <td>
               
                <a href="edit-menu.php?id=<?php echo $row['pesanan_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-menu.php?id=<?php echo $row['pesanan_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

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