<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Login Belig Coffee </title>
    <link rel="stylesheet" href="<?php echo base_url() ?>../assets/css/login.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="<?php echo base_url() ?>../assets/images/banner.jpg" alt="">
                <div class="text">
                    <span class="text-1">Selamat datang di <br> Website E-CRM Belig Coffee</span>
                    <span class="text-2">Mari bergabung!</span>
                </div>
            </div>
            <div class="back">
                <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get started</span>
                </div>
            </div>
        </div>
        <div class="forms">

            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login Belig Coffee</div>
                    <br>
                    <?php echo $this->session->flashdata('msg'); ?>
                    <form action="<?php echo base_url() . 'mobile/member/auth' ?>" method="post">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input name="email" type="text" placeholder="Masukan email..." required
                                    autocomplete="off">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input name="pass" type="password" placeholder="Masukan kata sandi anda..." required
                                    autocomplete="off">
                            </div>

                            <div class="button input-box">
                                <input type="submit" value="Masuk">
                            </div>
                            <div class="text sign-up-text">Belum mempunyai akun? <label for="flip">Daftar akun</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="signup-form">

                    <div class="title">Signup</div>
                    <form action="<?php echo base_url() . 'mobile/member/simpan_pelanggan' ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" name="nama" placeholder="Enter your name" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-location"></i>
                                <input type="text" name="alamat" placeholder="Enter your adress" required>
                            </div>

                            <div class="input-box">
                                <i class="fas fa-location"></i>
                                <input type="text" name="kontak" placeholder="Enter your phone number" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="pass" placeholder="Enter your password" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="pass2" placeholder="Confirm your password" required>
                            </div>
                            <label style="font-weight:500;color:black;" for="">Upload Foto</label>
                            <input type="file" name="filefoto">
                            <div class="button input-box">
                                <input type="submit" value="Register Account">
                            </div>
                            <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
@media only screen and(max-width:410px) {
    img.logo {
        margin-left: 200px;
        position: absolute;
    }

    title {
        color: red;
    }
}
</style>

</html>