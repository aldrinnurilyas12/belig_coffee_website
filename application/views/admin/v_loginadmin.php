<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Registration Form</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Login admin</header>
            <?php echo $this->session->flashdata('msg'); ?>
            <form action="<?php echo base_url() . 'administrator/auth' ?>" accept-charset="utf-8" method="post">
                <input type="text" name="username" placeholder="Enter your username">
                <input type="password" name="password" placeholder="Enter your password">
                <a href="#">Forgot password?</a>
                <input type="button" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                    <label for="check">Signup</label>
                </span>
            </div>
        </div>
        <div class="registration form">
            <header>Signup</header>
            <form action="#">
                <input type="text" placeholder="Enter your email">
                <input type="password" placeholder="Create a password">
                <input type="password" placeholder="Confirm your password">
                <input type="button" class="button" value="Signup">
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
                    <label for="check">Login</label>
                </span>
            </div>
        </div>
    </div>
</body>

</html>