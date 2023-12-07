<?php
    include("adminheader.php");
    include("../connection-handler/finalTaskDBConnectionHandler.php");
?>

<div class="container">
    <h3 style="width: 100%; border-bottom: 4px rgb(16, 182, 16) solid;" class="mt-3">
        Pengelolaan Data Barang
    </h3>
    <?php if (array_key_exists("stuff_deleted", $_GET)) { ?>    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-lg"></i>
        Data Berhasil Terhapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    <?php } else if (array_key_exists("stock_added_successfully", $_GET)) { ?> 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-lg"></i>
        1 Data Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>     
    <?php } else if (array_key_exists("stock_edited_successfully", $_GET)) { ?>  
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-lg"></i>
        1 Data Berhasil Diubah
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
    </div>
    <?php } ?>
    <a href="adminaddstuff.php" class="btn btn-success mb-3 mt-2"><i class="bi bi-plus-square"></i> Tambah Stok</a>            
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No.</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Foto Barang</th>
                <th>Tahun Keluaran</th>
                <th>Deskripsi Barang</th>
                <th>Harga Barang</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $connector = finalTaskConnector();
                $action = mysqli_query($connector, "SELECT * FROM stuff_to_sale");
                $numrows = 1;

                while ($fields = mysqli_fetch_assoc($action)) {
            ?>
            <tr>
                <td><?= $numrows; ?>.</td>
                <td><?= $fields['stuff_code']; ?></td>
                <td><?= $fields['stuff_name']; ?></td>
                <td><img src="../images/<?= $fields['stuff_proof_image']; ?>" alt="..." style="width: 100px;"></td>
                <td><?= $fields['stuff_release_year']; ?></td>
                <td><?= $fields['stuff_description']; ?></td>
                <td>Rp. <?= number_format($fields['stuff_price'], 0, ".", "."); ?></td>
                <td>
                    <a href="admin-processor-folder/deletestuffprocess.php?s_code=<?= $fields['stuff_code']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapusnya?');"><i class="bi bi-trash"></i> Hapus</a>
                    <a href="admineditstuff.php?s_code=<?= $fields['stuff_code']; ?>" class="btn btn-warning mt-1"><i class="bi bi-pencil"></i> Sunting</a>
                </td>
            </tr>
            <?php $numrows++; } ?>
        </tbody>
    </table>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
    include("adminfooter.php");
?>