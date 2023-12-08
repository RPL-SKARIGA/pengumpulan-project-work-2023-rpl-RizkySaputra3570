<?php
    session_start();
    
    include("../crud-folder/user_crud.php");        

    $usernameIn = $_POST['usernameInput'];
    $passwordIn = $_POST['passwordInput'];

    if (authenticateUser($usernameIn, $passwordIn)) {
        $userdata = [];
        $userdata = searchUser($usernameIn);
        $_SESSION['Username'] = $userdata['username'];
        $_SESSION['User_Code'] = $userdata['user_id'];
        header("Location: ../index.php");
    } else if (empty($usernameIn) or empty($passwordIn)) {
        header("Location: ../userlogin.php?username_or_password_is_empty");         
    } else {
        header("Location: ../userlogin.php?error_username_not_found"); 
    }    
?>