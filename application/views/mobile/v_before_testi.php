<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Testimonial</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    < <!-- Favicons -->
        <link href="../../yummy/assets/img/favicon.png" rel="icon">
        <link href="../../yummy/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/jquery.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/jquery.mmenu.min.all.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/jquery.easy-pie-chart.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/o-script.js' ?>"></script>


        <script>
        jQuery(document).ready(function($) {
            $('.popup').click(function(event) {
                var width = 575,
                    height = 400,
                    left = ($(window).width() - width) / 2,
                    top = ($(window).height() - height) / 2,
                    url = this.href,
                    opts = 'status=1' +
                    ',width=' + width +
                    ',height=' + height +
                    ',top=' + top +
                    ',left=' + left;

                window.open(url, 'twitter', opts);

                return false;
            });
        });
        jQuery(document).ready(function($) {
            $('.popup2').click(function(event) {
                var width = 575,
                    height = 400,
                    left = ($(window).width() - width) / 2,
                    top = ($(window).height() - height) / 2,
                    url = this.href,
                    opts = 'status=1' +
                    ',width=' + width +
                    ',height=' + height +
                    ',top=' + top +
                    ',left=' + left;
                window.open(url, 'facebook', opts);
                return false;
            });
        });
        </script>

        <!-- Vendor CSS Files -->
        <link href="../../yummy/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../yummy/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../../yummy/assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="../../yummy/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../../yummy/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="../../yummy/assets/css/main.css" rel="stylesheet">


</head>

<body>


    <!-- <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
              
                <h1>Belig Coffee</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?php echo base_url() ?>mobile/beranda">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#testimonial">Testimonial</a></li>
                    <li><a href="#contact">Riwayat Pemesanan</a></li>


                </ul>
            </nav>

            <a style="font-weight: bold;" href="<?php echo base_url() . 'mobile/menu/cart' ?>">
                <i class="material-icons" style="font-size:26px">shopping_cart</i><span style="margin-top: -1px;position:absolute;">(<?= $this->cart->total_items(); ?>)</span>
            </a>
            &nbsp;
            <a style="font-weight: 400;color:black" href="#">
                Welcome, <span style="font-weight: bold;"> <?php
                                                            if ($this->session->userdata('online') == TRUE) {
                                                            ?>
                    <?php echo $this->session->userdata('plg_nama');
                                                            } ?></span>
            </a>


            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header> -->

    <main style="margin-top: 70px;padding:20px;height:max-content; margin-bottom:20px;" id="main">


        <div style="display: flex;justify-content:center;" class="title">
            <h1 style="font-weight: 700;">Testimonial dari pelanggan kami</h1>
        </div>

        <div style="display: flex;justify-content:space-between;margin-left:80px;" class="btn-entry">
            <a style="padding: 10px;background:blue; color:white;border-radius:5px;"
                href="<?php echo base_url() ?>mobile/testimonial/loadentry">Entry Testimonial</a>

        </div>

        <section style="display: flex;flex-wrap:wrap;justify-content:center;padding:10px;" class="menu"
            id="testimonial">
            <?php
            foreach ($data->result_array() as $a) {

                $nama = $a['plg_nama'];
                $rating = $a['rating'];
                $isi = $a['isi_testimonial'];
                $tanggal = $a['tgl_testimonial'];
                $user_foto = $a['users_foto'];
            ?>
            <div class="notifications-container">

                <div style="background-color: white;box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;"
                    class="success">

                    <div class="flex">

                        <div class="flex-shrink-0">


                        </div>

                        <div class="success-prompt-wrap">

                            <div style="display: flex;align-items:center;" class="content">
                                <img style="width: 60px;height:60px;border-radius:50px;"
                                    src="<?php echo base_url() . 'assets/images/' . $user_foto; ?>" alt="">
                                <h5 style="color: black;margin-left:15px;" class="success-prompt-heading">
                                    <?php echo $nama ?>
                                </h5>
                            </div>
                            <div class="success-prompt-prompt">
                                <p style="color: black;font-size:14px;font-weight:500;"><?php echo $isi ?></p>
                            </div>
                            <div class="success-button-container">
                                <button style="width: 120px;display:flex;" type="button"
                                    class="success-button-main">Rating : &nbsp; <img style="width: 20px;height:20px;"
                                        src="<?php echo base_url() ?>assets/img/rating.png" alt=""> &nbsp;
                                    <?php echo $rating ?>
                                </button>
                                <button type="button" class="success-button-secondary"><?php echo $tanggal ?></button>

                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <?php } ?>

        </section>


    </main><!-- End #main -->



    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../../yummy/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../yummy/assets/vendor/aos/aos.js"></script>
    <script src="../../yummy/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../yummy/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../yummy/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../yummy/assets/vendor/php-email-form/validate.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Template Main JS File -->
    <script src="../../yummy/assets/js/main.js"></script>


    <style>
    body {
        font-family: 'Rubik', sans-serif;
    }

    .notifications-container {
        width: 440px;
        height: auto;
        font-size: 0.875rem;
        line-height: 1.25rem;
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .flex {}

    .flex-shrink-0 {
        flex-shrink: 0;
    }

    .success {
        margin-top: 30px;
        width: 430px;
        padding: 1rem;
        border-radius: 4px;

        flex-direction: column;
    }

    .succes-svg {
        color: rgb(74 222 128);
        width: 1.25rem;
        height: 1.25rem;
    }

    .success-prompt-wrap {
        margin-left: 0.75rem;
    }

    .success-prompt-heading {
        font-weight: bold;
        color: rgb(22 101 52);
    }

    .success-prompt-prompt {
        margin-top: 0.5rem;
        color: rgb(21 128 61);
    }

    .success-button-container {
        display: flex;
        margin-top: 0.875rem;
        margin-bottom: -0.375rem;
        margin-left: -0.5rem;
        margin-right: -0.5rem;
    }

    .success-button-main {
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        background-color: #ECFDF5;
        color: rgb(22 101 52);
        font-size: 0.875rem;
        line-height: 1.25rem;
        font-weight: bold;
        border-radius: 0.375rem;
        border: none
    }

    .success-button-main:hover {
        background-color: #D1FAE5;
    }

    .success-button-secondary {
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        margin-left: 0.75rem;
        background-color: #ECFDF5;
        color: #065F46;
        font-size: 0.875rem;
        line-height: 1.25rem;
        border-radius: 0.375rem;
        border: none;
    }
    </style>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</html>