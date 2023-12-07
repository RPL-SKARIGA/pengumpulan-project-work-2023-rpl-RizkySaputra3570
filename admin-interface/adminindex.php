<?php
    include("adminheader.php");
    include("../connection-handler/finalTaskDBConnectionHandler.php");

    $connector = finalTaskConnector();
    $user_query = mysqli_query($connector, "SELECT DISTINCT user_id FROM user_tab");
    $user_count = mysqli_num_rows($user_query);

    $stuff_query = mysqli_query($connector, "SELECT DISTINCT stuff_code FROM stuff_to_sale");
    $stuff_count = mysqli_num_rows($stuff_query);    
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="accordion mt-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Data Penjual
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           Jumlah Data Penjual Saat Ini: <b><?= $user_count; ?></b>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Data Barang
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Jumlah Data Barang Saat Ini: <b><?= $stuff_count; ?></b>
                        </div>
                    </div>
                </div>
            </div>            
        </div>        
    </div>
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