<?php
    include("../connection-handler/finalTaskDBConnectionHandler.php");
    include("../crud-folder/user_crud.php");

    $usernameIn = $_POST['usernameInput']; 
    $emailIn = $_POST['emailInput'];
    $phoneIn = $_POST['phoneInput'];
    $passwordIn = $_POST['passwordInput'];
    $confirmIn = $_POST['confirmPasswordInput'];

    if ($confirmIn == $passwordIn) {
        $idDeclaration = readAllUsers() + 1;
        addUser($idDeclaration, $usernameIn, $emailIn, $phoneIn, $passwordIn);
        header("Location: ../userlogin.php");
    } else {
        header("Location: ../userregister.php?error_password_not_match");
    }    
?>