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
    $oldImage = mysqli_query(
        $connector, 
        "SELECT stuff_proof_image FROM stuff_to_sale WHERE stuff_code = '$stockcode'"
    );
    $imageField = mysqli_fetch_assoc($oldImage);

    if (file_exists("../../images/" . $imageField['stuff_proof_image'])) {
        move_uploaded_file($stockImageFile, "../../images/$stockImageFilename");
        $action = mysqli_query(
            $connector,
            "UPDATE stuff_to_sale SET stuff_name = '$stockname', stuff_price = '$stockprice',
            stuff_release_year = '$stockreleaseyear', stuff_description = '$stockdesc', 
            stuff_proof_image = '$stockImageFilename' WHERE stuff_code = '$stockcode'"
        );
        header("Location: ../stufftabcontrol.php?stock_edited_succesfully");
    }
?>