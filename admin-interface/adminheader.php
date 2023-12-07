<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Sellit.com | Distributed by SellIt Indonesia</title>
        <link rel="stylesheet" href="../bootstrap-5.3.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="../bootstrap-icons-1.11.1/bootstrap-icons.css">
        <link rel="stylesheet" href="../self-folder/CSS/styling.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="adminindex.php">
                    <i class="bi bi-person-workspace"></i>
                    Admin Sellit.com
                </a>   
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="bi bi-database-fill-gear"></i>
                                Opsi Master Tabel
                            </a>       
                            <ul class="dropdown-menu">
                                <li class="dropdown-item disabled"><i class="bi bi-database-fill"></i> Daftar Tabel</li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a href="usertabcontrol.php" class="dropdown-item"><i class="bi bi-person-lines-fill"></i> Master Tabel Pengguna</a></li>
                                <li><a href="stufftabcontrol.php" class="dropdown-item"><i class="bi bi-box2-fill"></i> Master Tabel Barang</a></li>
                            </ul>                                                 
                        </li>
                        <li class="nav-item">
                            <div class="dropend">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    <i class="bi bi-gear-fill"></i>
                                    Pengaturan Akun Admin
                                </button>                   
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><i class="bi bi-person-circle"></i> Admin</li>
                                    <li><hr class="dropdown-divider"></li>                                    
                                    <li><a href="#" class="dropdown-item">Keluar</a></li>
                                </ul>                 
                            </div>
                        </li>
                    </ul>
                </div> 
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" name="searchData" placeholder="Cari..." aria-label="Search">
                    <button class="btn btn-outline-light" name="searchDataButton" type="submit">Cari</button>                
                </form>                                                            
            </div>
        </nav>