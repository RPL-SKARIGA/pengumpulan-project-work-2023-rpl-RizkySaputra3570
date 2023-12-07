<?php
    include("../../connection-handler/finalTaskDBConnectionHandler.php");

    $connector = finalTaskConnector(); 
    $stockcode = $_GET['s_code'];
    $code = mysqli_query($connector, "SELECT * FROM stuff_to_sale WHERE stuff_code = '$stockcode'");
    $fields = mysqli_fetch_assoc($code);
    $delete = mysqli_query($connector, "DELETE FROM stuff_to_sale WHERE stuff_code = '$stockcode'");

    if ($delete) {
        unlink("../../images/" . $fields['stuff_proof_image']);
        header("Location: ../stufftabcontrol.php?stuff_deleted");
    }
?>