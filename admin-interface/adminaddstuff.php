<?php
    include("adminheader.php");
    include("../connection-handler/finalTaskDBConnectionHandler.php");

    $connector = finalTaskConnector();
    $action = mysqli_query($connector, "SELECT stuff_code FROM stuff_to_sale ORDER BY stuff_code DESC");
    $fetch = mysqli_fetch_assoc($action);
    $stockcode = substr($fetch['stuff_code'], 1, 4);
    $add = (int) $stockcode + 1;

    if (strlen($add) == 1) {
        $format = "1202$add";
    } else if (strlen($add) == 2) {
        $format = "120$add";
    } else if (strlen($add) == 3) {
        $format = "12$add";
    } else {
        $format = "1$add";
    }
?>

<div class="container">
    <h3 style="width: 100%; border-bottom: 4px rgb(16, 182, 16) solid;" class="mt-3">
        Tambah Data Barang
    </h3>
    <form action="admin-processor-folder/addstuffprocess.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputFile">Pilih Gambar</label>
                    <input type="file" name="stockImageFileInput" id="exampleInputFile" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputEmail1">Kode Barang</label>
                    <input type="text" class="form-control" id="inputEmail1" placeholder="Kode Barang" value="<?= $format; ?>">
                    <input type="hidden" name="stock_code" id="inputEmail1" class="form-control" placeholder="Kode Barang" value="<?= $format; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="mt-2" for="inputEmail1">Nama Barang</label>
                <input type="text" class="form-control" name="stock_name" id="inputEmail1" placeholder="Nama Barang">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="mt-2" for="inputEmail1">Harga Jual</label>
                    <input type="number" class="form-control" name="stock_price" id="inputEmail1" placeholder="Harga Barang">
                    <div class="form-text">
                        Saat mengisi harga, disarankan untuk tidak memakai tanda titik di antara nominal harga tersebut.
                    </div>                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="mt-2" for="inputEmail1">Tahun Keluaran</label>
                <input type="text" class="form-control" name="stock_release_year" id="inputEmail1" placeholder="Tahun Keluaran Barang">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="mt-2" for="inputPassword1">Deskripsi Barang</label>
                    <textarea class="form-control" name="stock_description" placeholder="Deskripsi (Opsional)"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-outline-success">
                    <i class="bi bi-plus-circle"></i>
                    Tambahkan
                </button>
                <a href="stufftabcontrol.php" class="btn btn-outline-danger">
                    <i class="bi bi-x-circle"></i>
                    Batal
                </a>
            </div>
        </div>
        <br>
    </form>
</div>

<?php 
    include("adminfooter.php");
?>