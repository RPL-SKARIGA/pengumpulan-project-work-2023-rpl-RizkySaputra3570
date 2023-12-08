<?php
    include("connection-handler/finalTaskDBConnectionHandler.php");

    session_start();

    if (isset($_SESSION["Username"])) {
        $usercode = $_SESSION["User_Code"];
    }
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SellIt.com - Website Penjualan Hardware Bekas</title>
        <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap-icons-1.11.1//bootstrap-icons.css">
        <link rel="stylesheet" href="self-folder/CSS/styling.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php" style="color: #0ea9cf;">Sellit.com</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="transactionhistory.php" class="nav-link">
                                <i class="bi bi-currency-dollar"></i>
                                Histori Transaksi
                            </a>
                        </li>
                        <?php if (!isset($_SESSION['Username'])) { ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="bi bi-gear-fill"></i>
                                Pengaturan Akun
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item disabled"><i class="bi bi-person-circle"></i> Akun</li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a href="userregister.php" class="dropdown-item">Daftar</a></li>
                                <li><a href="userlogin.php" class="dropdown-item">Masuk</a></li>
                            </ul>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="bi bi-gear-fill"></i>
                                Pengaturan Akun
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><i class="bi bi-person-circle"></i> <?= $_SESSION['Username']; ?></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a href="admin-interface/adminindex.php" class="dropdown-item">Mode Admin</a></li>
                                <li><a href="user-processor-folder/userlogoutprocess.php" class="dropdown-item">Keluar</a></li>
                            </ul>
                        </li>    
                        <?php } ?>                                            
                    </ul>
                </div>
            </div>
        </nav>