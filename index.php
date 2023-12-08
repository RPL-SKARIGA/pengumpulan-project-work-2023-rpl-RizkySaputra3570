<?php
    include('header.php');
    include_once('connection-handler/finalTaskDBConnectionHandler.php');
?>

        <br>
        <div class="container">
            <h4 class="text-left" style="padding-top: 10px; padding-bottom: 10px;
            line-height: 27px; border-top: 3px solid #0ea9cf;" class="mt-3">
                <i class="bi bi-info-circle-fill"></i> Tentang situs ini
            </h4>
            <h6 class="mt-3">
                SellIt.com adalah sebuah situs web yang memungkinkan Anda untuk menjual berbagai komponen 
                ataupun <i>hardware</i> yang sudah tidak Anda butuhkan kembali. Situs ini
                telah diestimasi sejak tahun 2023. 
            </h6>
            <?php if (array_key_exists("successfully_sold", $_GET)) { ?>        
            <div class="alert alert-success alert-dismissable fade show" role="alert">
                <i class="bi bi-check-lg"></i>
                Barang telah terjual, cek detail dibawah halaman ini.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>  
            <?php } ?>  
            <h5 class="pt-2" style="border-top: 3px solid #0ea9cf;">
                Barang apa yang ingin Anda jual hari ini?
            </h5>
            <div class="col mt-3">
                <a href="sellingform.php" class="btn btn-outline-primary">Jual Barang</a>
            </div>
            <?php if (isset($_SESSION['Username'])) { ?>
            <h4 style="width: 100%; border-bottom: 4px solid #0ea9cf; margin-top: 80px;">
                Barang Yang Dijual
            </h4>
            <div class="row mt-2">
                <div class="col">
                    <table class="table table-info table-striped">
                        <thead class="table-light">
                            <tr>
                                <th>No.</th>
                                <th>Foto Barang</th>
                                <th>Nama Barang</th>
                                <th>Tahun Keluaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $connector = finalTaskConnector();
                                $action = mysqli_query($connector, "SELECT * FROM stuff_to_sale");
                                $tablerows = 1;

                                while ($arrays = mysqli_fetch_assoc($action)) {
                            ?>
                            <tr>
                                <td><?= $tablerows; ?>.</td>
                                <td><img src="images/<?= $arrays['stuff_proof_image']; ?>" alt="" style="width: 100px;"></td>
                                <td><?= $arrays['stuff_name']; ?></td>
                                <td><?= $arrays['stuff_release_year']; ?></td>
                            </tr>
                            <?php $tablerows++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="alert alert-info mt-3" role="alert">
                <i class="bi bi-info-circle-fill"></i>
                Jika ada kesalahan dalam menjual barang Anda, silahkan hubungi Admin
            </div>            
            <?php } else { ?>   
            <div class="alert alert-primary mt-3" role="alert">
                <i class="bi bi-info-circle-fill"></i>
                Silahkan masuk ke akun Anda terlebih dahulu 
            </div>    
            <?php } ?>                                 
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>

<?php
    include('footer.php');
?>