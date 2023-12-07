<?php
    include("adminheader.php");
    include("../connection-handler/finalTaskDBConnectionHandler.php");

    if (isset($_GET['Control'])) {
        $connector = finalTaskConnector();
        $usercode = $_GET['User_Code'];
        $action = mysqli_query($connector, "DELETE FROM user_tab WHERE user_id = $usercode");

        if ($action) {
            header("Location: usertabcontrol.php?user_deleted");
        }
    }
?>

<div class="container">
    <h3 style="width: 100%; border-bottom: 4px rgb(16, 182, 16) solid;" class="mt-3">
        Pengelolaan Data Penjual
    </h3>
    <?php if (array_key_exists("user_deleted", $_GET)) { ?>    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-lg"></i>
        Data Berhasil Terhapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    <?php } ?>         
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No.</th>
                <th>Kode Pengguna</th>
                <th>Nama Pengguna</th>
                <th>Surat Elektronik</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $connector = finalTaskConnector();
                $action = mysqli_query($connector, "SELECT * FROM user_tab ORDER BY user_id ASC");
                $numrows = 1;

                while ($fields = mysqli_fetch_assoc($action)) {
            ?>
            <tr>
                <td><?= $numrows; ?></td>
                <td><?= $fields['user_id']; ?></td>
                <td><?= $fields['username']; ?></td>
                <td><?= $fields['email']; ?></td>
                <td><a href="usertabcontrol.php?User_Code=<?= $fields['user_id']; ?>&Control=del" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapusnya?');"><i class="bi bi-trash"></i> Hapus</a></td>
            </tr>
            <?php } ?>
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