<?php
    include("../../connection-handler/finalTaskDBConnectionHandler.php");

    $connector = finalTaskConnector();
    $stockcode = $_POST['stock_code'];
    $stockname = $_POST['stock_name'];
    $stockprice = $_POST['stock_price'];
    $stockreleaseyear = $_POST['stock_release_year']; 
    $stockdesc = $_POST['stock_description'];
    $stockImageFilename = $_FILES['stockImageFileInput']['name'];
    $stockImageFile = $_FILES['stockImageFileInput']['tmp_name'];

    $action = mysqli_query(
        $connector, 
        "INSERT INTO stuff_to_sale VALUES(
            '$stockcode', '$stockname', '$stockprice' '$stockreleaseyear', '$stockdesc', '$stockImageFilename'
        )"
    );
    move_uploaded_file($stockImageFile, "../../images/$stockImageFileName");
    header("Location: ../stufftabcontrol.php?stock_added_successfully");
?>