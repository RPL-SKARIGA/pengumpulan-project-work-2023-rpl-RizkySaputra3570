<?php 
    include('header.php'); 
    include_once('connection-handler/finalTaskDBConnectionHandler.php')
?>

<div class="container" style="padding-bottom: 250px;">
    <h3 style="width: 100%; border-bottom: 4px solid #0ea9cf;" class="mt-3">
        <b>Histori Transaksi</b>
    </h3>
    <?php
        $connector = finalTaskConnector();

        if (isset($_SESSION['Username'])) {
            $user = $_SESSION['User_Code'];
            $code = mysqli_query($connector, "SELECT * FROM transaction_tab WHERE user_id = '$user'");
            $fields = mysqli_num_rows($code);

            if ($fields > 0) {
    ?>
    <table class="table-primary table-striped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Waktu Penjualan</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
            </tr>
        </thead>
        <?php
            if (isset($_SESSION['User_Code'])) {
                $user = $_SESSION['User_Code'];
                $code = mysqli_query(
                    $connector, 
                    "SELECT transaction_tab.transaction_id, transaction_tab.stuff_code, transaction_tab.stuff_name 
                    FROM transaction_tab JOIN stuff_to_sale ON transaction_tab.stuff_code = stuff_to_sale.stuff_code 
                    WHERE user_id = '$user'"
                );
                $tablenum = 1;

                while ($tablefields = mysqli_fetch_assoc($code)) {
        ?>
        <tbody>
            <input type="hidden" value="<?= $tablefields['transaction_id']; ?>">
            <tr>
                <th scope="row"><?= $tablenum; ?></th>
                <td></td>
                <td><?= $tablefields['stuff_code']; ?></td>
                <td><?= $tablefields['stuff_name']; ?></td>
            </tr>
            <?php 
                                $tablenum++;    
                            }
                        }
                    }
                }
            ?>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-primary mt-4">Kembali Ke Menu Utama</a>
</div>

<?php
    include('footer.php');
?>