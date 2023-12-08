<?php 
    include("header.php"); 
?>

<div class="container" style="padding-bottom: 250px;">
    <h3 style="width: 100%; border-bottom: 4px solid #0ea9cf;" class="mt-3">
        <b>Formulir Penjualan Barang</b>
    </h3>    
    <?php if (array_key_exists("form_must_be_filled", $_GET)) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-square-fill"></i>
        Mohon maaf, formulir harus terisi terlebih dahulu
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    <?php 
        } 

        if (isset($_SESSION['Username'])) { 
    ?>
    <form action="user-processor-folder/sellingprocess.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stuffname" class="col-form-label">Nama Barang</label>
            <div class="col-sm-8">
                <input type="text" name="stuffname" id="stuffname" class="form-control" placeholder="Nama Barang">
            </div>
        </div>        
        <div class="form-group">
            <label for="stuffprice" class="col-form-label">Harga Barang</label>
            <div class="col-sm-8">
                <input type="text" name="stuffprice" id="stuffprice" class="form-control" placeholder="Contoh: Rp. 800.000">
            </div>
        </div>        
        <div class="form-group">
            <label for="stuffreleaseyear" class="col-form-label">Tahun Keluaran</label>
            <div class="col-sm-8">
                <select name="stuffreleaseyear" id="stuffreleaseyear" class="form-control">
                    <option value="">Pilih Tahun Rilis Yang Sesuai</option>
                    <?php
                        $year = 2021;
                        $lowyear = $year - 16;
                        
                        for ($year; $year >= $lowyear; $year--) {
                            $yearParsed = str_pad($year, 2, "0", STR_PAD_LEFT);
                    ?>
                    <option value="<?= $yearParsed; ?>"><?= $yearParsed; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>        
        <div class="form-group">
            <label for="stuffdesc" class="col-form-label">Deskripsi Barang</label>
            <div class="col-sm-8">
                <textarea name="stuffdesc" id="stuffdesc" class="form-control" placeholder="Opsional"></textarea>
            </div>
        </div>        
        <div class="form-group mt-1">
            <label for="formFile" class="col-form-label">Gambar</label>
            <div class="col-sm-8">
                <input class="form-control" type="file" name="stuffimage" id="formFile">
            </div>            
        </div> 
        <div class="form-group alert alert-warning mt-5" role="alert">
            <i class="bi bi-exclamation-circle-fill"></i>
            Pastikan untuk memverifikasi barang Anda sebelum dijual.
        </div>
        <div class="form-group">
            <div class="col-sm-8 mt-4">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verificationModal">
                    <i class="bi bi-check2-circle"></i>
                    Verifikasi
                </button>
                <a href="index.php" class="btn btn-danger">
                    <i class="bi bi-x-circle"></i>
                    Batalkan Penjualan
                </a>
            </div>
        </div>     
        <div class="form-group">
            <div class="modal fade" id="verificationModal" tabindex="-1" aria-labelledby="modalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalLabel">Verifikasi Penjualan</h1>
                        </div>
                        <div class="modal-body">
                            <h5 class="fs-3">Apakah Anda yakin untuk menjual barang tersebut?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-success">
                                <i class="bi bi-check-lg"></i>
                                Ya, jual sekarang
                            </button>
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                <i class="bi bi-x-lg"></i>
                                Tidak
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </form>
    <?php } else { ?>
    <div class="alert alert-primary mt-3">
        <i class="bi bi-info-circle-fill"></i>
        Untuk mengisi formulir ini, silahkan masuk ke akun Anda terlebih dahulu
    </div>
    <?php } ?>
</div>
<br>
<br>
<br>
<br>
<br>

<?php 
    include("footer.php"); 
?>