<?php include "header.php"; ?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-menu.php" method="POST">
                <div class="form-group">
                        <label for="pesanan_id">No</label>
                        <input type="number" name="pesanan_id"value="<?php echo $row['pesanan_id']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Menu">Menu</label>
                        <input type="text" name="Menu"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="number" name="Harga"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Jumlah">Jumlah</label>
                        <input type="number" name="Jumlah"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="subharga">subharga</label>
                        <input type="number" name="total_harga"  class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="Simpan" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>