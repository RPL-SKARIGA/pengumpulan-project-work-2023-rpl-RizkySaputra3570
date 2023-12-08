<?php
    include('header.php');
?>

<div class="container" style="padding-bottom: 250px;">
    <h3 style="width: 100%; border-bottom: 4px solid #0ea9cf;" class="mt-3">
        <b>Masuk ke SellIt.com</b>
    </h3>
    <?php if (array_key_exists("error_username_not_found", $_GET)) { ?>    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-square-fill"></i>
        Nama pengguna tidak ada. Coba gunakan nama yang terdaftar.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    <?php } else if (array_key_exists("error_username_or_password_is_empty", $_GET)) { ?>  
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-square-fill"></i>
        Nama pengguna dan Kata Sandi Tidak Boleh Kosong.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>                 
    <?php } ?>
    <form action="user-processor-folder/userloginprocess.php" method="post">
        <div class="form-group">
            <label for="inputUsername3" class="visuality-hidden mt-1">Nama Pengguna</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                <div class="col-md-5">
                    <input type="text" name="usernameInput" id="inputUsername3" class="form-control" placeholder="Nama Pengguna">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="visuality-hidden mt-3">Kata Sandi</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                <div class="col-md-5">
                    <input type="password" name="passwordInput" id="inputPassword3" class="form-control" placeholder="Kata Sandi">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 mt-3">
                <button type="submit" class="btn btn-outline-primary">
                   <i class="bi bi-box-arrow-in-right"></i> Masuk
                </button>
                <a href="index.php" class="btn btn-outline-dark"><i class="bi-bi-x-circle"></i>Batal</a>                
            </div>
            <div class="col-sm-10">
                <small><b>Belum mempunyai akun? </b><a href="userregister.php" class="link-dark" id="register-link">Daftar</a></small>
            </div>
        </div>  
    </form>
</div>

<?php
    include('footer.php');
?>