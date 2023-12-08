<?php
    include('header.php');
?>

<div class="container" style="padding-bottom: 250px;">
    <h3 style="width: 100%; border-bottom: 4px solid #0ea9cf;" class="mt-3">
        <b>Selamat datang, pengguna baru!</b>
    </h3>
    <?php if (array_key_exists("error_password_not_match", $_GET)) { ?>    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-square-fill"></i>
        Kata sandi tidak cocok. Coba lagi.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    <?php } ?>          
    <form action="user-processor-folder/userregisterprocess.php" method="post">
        <div class="form-group row g-3">
            <div class="col-sm-5 mt-3">
                <label class="visuality-hidden mt-1" for="inputUsername3">Nama Pengguna</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                    <input type="text" class="form-control" name="usernameInput" id="inputUsername3" placeholder="Nama Pengguna">
                </div>
            </div>
            <div class="col-sm-5 mt-3">
                <label class="visuality-hidden mt-1" for="inputPassword3">Kata Sandi</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                    <input type="password" class="form-control" name="passwordInput" id="inputPassword3" placeholder="Kata Sandi">
                </div>
            </div>
        </div>
        <div class="form-group row g-3">
            <div class="col-sm-5 mt-3">
                <label class="visuality-hidden mt-3" for="inputUsername3">Nomor Telepon</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-telephone-fill"></i></div>
                    <input type="tel" class="form-control" name="phoneInput" id="inputUsername3" placeholder="Nomor Telepon Yang Dapat Dihubungi">                
                </div>
            </div>
            <div class="col-sm-5 mt-3">
                <label class="visuality-hidden mt-3" for="inputUsername3">Konfirmasi Kata Sandi</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                    <input type="password" class="form-control" name="confirmPasswordInput" id="inputUsername3" placeholder="Konfirmasi Kata Sandi">                
                </div>
            </div>
        </div>
        <div class="form-group row g-3">
            <div class="col-sm-5 mt-3">
                <label class="visuality-hidden mt-3" for="inputEmail3">E-Mail</label>
                <div class="input-group">
                    <div class="input-group-text"><i class="bi bi-envelope-at-fill"></i></div>
                    <input type="email" class="form-control" name="emailInput" id="inputEmail3" placeholder="Alamat E-Mail (Google, Yahoo, Outlook)">                
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 mt-3">
                <button type="submit" class="btn btn-outline-primary">
                    <i class="bi bi-box-arrow-right"></i>
                    Daftar
                </button>
                <a href="index.php" class="btn btn-outline-dark">Batal</a>
            </div>
            <div class="col-sm-10">
                <small><b>Sudah mempunyai akun? </b><a href="userlogin.php" class="link-dark" id="register-link">Masuk</a></small>
            </div>
        </div>          
    </form>
</div>

<?php
    include('footer.php');
?>