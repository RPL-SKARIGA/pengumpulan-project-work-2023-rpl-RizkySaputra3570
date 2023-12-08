<?php
    include("../connection-handler/finalTaskDBConnectionHandler.php");
    include("../crud-folder/stuff_crud.php");

    $stuffnameIn = $_POST['stuffname'];
    $stuffpriceIn = $_POST['stuffprice'];
    $stuffyearIn = $_POST['stuffreleaseyear'];
    $stuffdescIn = $_POST['stuffdesc'];
    $stuffimageIn = $_FILES['stuffimage']['name'];
    $stuffimagetmp = $_FILES['stuffimage']['tmp_name'];

    if (
        !empty($stuffnameIn) && 
        !empty($stuffpriceIn) && 
        isset($stuffyearIn) && 
        !empty($stuffdescIn) && 
        isset($stuffimageIn)
    ) {
        $stuffcodeIn = (int) readStuff() + 1;
        addStuff($stuffcodeIn, $stuffnameIn, $stuffpriceIn, $stuffyearIn, $stuffdescIn, $stuffimageIn);
        move_uploaded_file($stuffimagetmp, "../images/$stuffimageIn");
        header("Location: ../index.php?successfully_sold");
    } else {
        header("Location: ../sellingform.php?form_must_be_filled");
    } 
?>