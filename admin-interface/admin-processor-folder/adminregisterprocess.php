<?php
    include("../../connection-handler/finalTaskDBConnectionHandler.php");
    include("../../crud-folder/admin_crud.php");

    $adminName = $_POST['adminName'];
    $adminPassword = $_POST['adminPasswordInput'];
    $adminConfirm = $_POST['adminConfirmPasswordInput'];

    if ($adminConfirm == $adminPassword) {
        $adminID = readAllAdmin() + 1;
        addAdmin($adminID, $adminName, $adminPassword);
        $_SESSION['Admin'] = $admindata['admin_name'];
        header("Location: ../adminlogin.php");
    } else {
        header("Location: ../adminregister.php");
    }
?>