<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Registration Form</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="<?php echo base_url() ?>../assets/css/loginadmin.css">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Login admin</header>
            <?php echo $this->session->flashdata('msg'); ?>
            <form action="<?php echo base_url() . 'administrator/auth' ?>" accept-charset="utf-8" method="post">
                <input type="text" id="username" name="username" placeholder="Enter your username">
                <input type="password" id="password" name="password" placeholder="Enter your password">

                <input type="submit" class="button" value="Login">
            </form>

        </div>
    </div>


    <!-- ============ FORM ADD PELANGGAN =============== -->
    <!-- <div class="registration form">
            <?php echo $this->session->flashdata('msg'); ?>
            <header>Daftar Admin</header>
            <form role="form" method="post" action="<?php echo base_url() . 'admin/pengguna/simpan_pengguna' ?>"
                enctype="multipart/form-data">
                <input type="text" name="nama" placeholder="Masukan Nama">

                <input type="text" name="username" placeholder="Buat Username">
                <input type="password" name="password" placeholder="Buat password">
                <input type="password" name="password2" placeholder="Konfirmasi password">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="kontak" placeholder="Phone Number">

                <div class="col-sm-8">
                    <input type="file" name="filefoto" class="form-control" id="regular13">
                </div>
                <input type="submit" class="button" value="Signup">
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
                    <label for="check">Login</label>
                </span>
            </div>
        </div> -->
    </div>
</body>

</html>