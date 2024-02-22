<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-menu.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from pesanan order by pesanan_id");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="pesanan_id">No</label>
                        <input type="hidden" name="pesanan_id" value="<?php echo $row['pesanan_id']?>" class="form-control">
                        <input type="number" name="pesanan_id"value="<?php echo $row['pesanan_id']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Menu">Menu</label>
                        <input type="text" name="Menu" value="<?php echo $row['Menu']?>" class="form-control">
                        </div>

                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="text" name="Harga" value="<?php echo $row['Harga']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Jumlah">Jumlah</label>
                        <input type="text" name="Jumlah"  value="<?php echo $row['Jumlah']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="subharga">subharga</label>
                        <input type="text" name="subharga" value="<?php echo $row['subharga']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>