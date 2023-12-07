<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Ke Admin SellIt.com | Distributed by SellIt Indonesia</title>
        <link rel="stylesheet" href="../bootstrap-5.3.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="../bootstrap-icons-1.11.1/bootstrap-icons.css">
        <link rel="stylesheet" href="../self-folder/CSS/styling.css">
        <script src="../bootstrap-5.3.1-dist/js/bootstrap.js"></script>
        <script src="../bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid mt-3">
                        <a href="#" class="navbar-brand" style="color: rgb(16, 182, 16);"> Admin SellIt.com Register</a>
                    </div>
                </nav>
                <div class="container-fluid" style="padding-bottom: 250px;">
                    <form action="admin-processor-folder/adminregisterprocess.php" method="post">
                        <div class="form-group">
                            <label for="inputUsername3" class="form-label"><i class="bi bi-person-fill"></i> Nama Admin</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="adminNameInput" id="inputUsername1" placeholder="Nama Admin">
                            </div>                            
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleInputPassword3" class="form-label"><i class="bi bi-lock-fill"></i> Kata Sandi</label>
                            <div class="col-md-5">
                                <input type="password" class="form-control" name="adminPasswordInput" id="exampleInputPassword1" placeholder="Kata Sandi">
                            </div>
                        </div>   
                        <div class="form-group mt-2">
                            <label for="exampleInputPassword3" class="form-label"><i class="bi bi-lock-fill"></i> Konfirmasi Kata Sandi</label>
                            <div class="col-md-5">
                                <input type="password" class="form-control" name="adminConfirmPasswordInput" id="exampleInputPassword1" placeholder="Konfirmasi Kata Sandi">
                            </div>
                        </div>   
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-dark">Daftar</button>
                            <a href="adminindex.php" class="btn btn-danger">Batal</a>
                        </div>                                  
                    </form> 
                    <p class="mt-3">
                        Atau <a href="adminlogin.php" id="register-link" style="color: #000;">Masuk</a> jika sudah mendaftar
                    </p>                
                </div>
            </div>
        </div>
        <br>
        <footer style="border-top: 3px solid rgb(16, 182, 16);">
            <div class="container" style="padding-bottom: 50px;">
                <div class="row">
                    <div class="col">
                        <?php $now = date("Y"); ?>
                        <h6 class="mt-3">&copysr; <?= $now; ?>, SellIt Indonesia. All rights reserved</h6>
                    </div>
                </div>
            </div>
        </footer>           
    </body>
</html>