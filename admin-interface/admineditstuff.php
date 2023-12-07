<?php
    include("adminheader.php");
    include("../connection-handler/finalTaskDBConnectionHandler.php");

    $connector = finalTaskConnector();
    $stockcode = $_GET['s_code'];
    $action = mysqli_query($connector, "SELECT * FROM stuff_to_sale WHERE stuff_code = '$stockcode'");
    $fields = mysqli_fetch_assoc($action);
?>

<div class="container">
<h3 style="width: 100%; border-bottom: 4px rgb(16, 182, 16) solid;" class="mt-3">
        Sunting Data Barang
    </h3>
    <form action="admin-processor-folder/addstuffprocess.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputFile">
                        <img src="../images/<?= $fields['stuff_proof_image']; ?>" alt="Edit Image" width="100">
                    </label>
                    <input type="file" name="stockImageFileInput" id="exampleInputFile" class="form-control" value="<?= $fields['stuff_proof_image']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputEmail1">Kode Barang</label>
                    <input type="text" class="form-control" id="inputEmail1" placeholder="Kode Barang" value="<?= $fields['stuff_code']; ?>">
                    <input type="hidden" name="stock_code" id="inputEmail1" class="form-control" placeholder="Kode Barang" value="<?= $fields['stuff_code']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="mt-2" for="inputEmail1">Nama Barang</label>
                <input type="text" class="form-control" name="stock_name" id="inputEmail1" placeholder="Nama Barang" value="<?= $fields['stuff_name']; ?>">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="mt-2" for="inputEmail1">Harga Jual</label>
                    <input type="number" class="form-control" name="stock_price" id="inputEmail1" placeholder="Harga Barang" value="<?= $fields['stuff_price']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="mt-2" for="inputEmail1">Tahun Keluaran</label>
                <input type="text" class="form-control" name="stock_release_year" id="inputEmail1" placeholder="Tahun Keluaran Barang" value="<?= $fields['stuff_release_year']; ?>">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="mt-2" for="inputPassword1">Deskripsi Barang</label>
                    <textarea class="form-control" name="stock_description" placeholder="Deskripsi (Opsional)">
                        <?= $fields['stuff_description']; ?>                        
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-outline-success">
                    <i class="bi bi-pencil"></i>
                    Sunting
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