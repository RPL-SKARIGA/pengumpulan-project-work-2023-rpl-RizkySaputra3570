<?php
    session_start();
    
    include("../../crud-folder/admin_crud.php");    
    
    $adminName = $_POST['adminNameInput'];
    $adminPassword = $_POST['adminPasswordInput'];

    if (authenticateAdmin($adminName, $adminPassword)) {
        $admindata = [];
        $admindata = searchAdmin($adminName);
        $_SESSION['Admin'] = $admindata['admin_name'];
        header("Location: ../adminindex.php");  
    } else {
        header("Location: ../adminlogin.php");
    }    
?>