<?php
error_reporting(0);
session_start();
include '../core/core.php';

if (isset($_SESSION['online'])) {
    header("Location:beranda");
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Belig Coffee | Welcome</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="../yummy/assets/img/favicon.png" rel="icon">
    <link href="../yummy/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="<?php echo base_url() . 'assets/images/logonew.jpg' ?>" rel="shortcut icon" type="image/x-icon">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/jquery.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/jquery.mmenu.min.all.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/jquery.easy-pie-chart.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/o-script.js' ?>"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php
    $b = $data->row_array();
    $minuman = $data->row_array();
    $snacks = $data->row_array();
    $url = base_url() . 'mobile/menu/detail_menu/' . $b['menu_id'];
    $img = base_url() . 'assets/gambar/' . $b['menu_gambar'];
    $title = $b['menu_nama'];
    $deskripsi = strip_tags($b['menu_deskripsi']);
    ?>
    <meta property="fb:app_id" content="966242223397117" />
    <meta property="og:locale" content="id_id" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $deskripsi; ?>" />
    <meta property="og:url" content="<?php echo $url ?>" />
    <meta property="og:site_name" content="" />

    <meta property="article:section" content="Mfood" />
    <meta property="og:image" content="<?php echo $img ?>" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="900" />

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
    <link href="../yummy/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../yummy/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../yummy/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../yummy/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../yummy/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../yummy/assets/css/main.css" rel="stylesheet">


</head>

<body>
    <?php
    $b = $data->row_array();
    $minuman = $data->row_array();
    $snacks = $data->row_array();
    ?>
    <!-- ======= Header ======= -->




    <section style="background-color: white;" id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 style="font-family: 'Playfair Display', serif;" data-aos="fade-up">Welcome<br>to Belig Coffee
                    </h2>
                    <p data-aos="fade-up" data-aos-delay="100">Ada banyak varian menu yang bisa kamu pilih
                        di Belig Coffee! Barista kami siap memberikan rekomendasi menu signature untuk #temanbelig </p>

                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" style="width:500px;height: 400px;"
                                    src="../assets/images/banner2.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" style="width:500px;height: 400px;"
                                    src="../assets/images/banner3.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" style="width:500px;height: 400px;"
                                    src="../assets/images/banner.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">




        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Menu</h2>
                    <p style="font-family: 'Playfair Display', serif;">Check Our <span>Belig Coffee Menu</span></p>
                </div>

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                            <h4>Promo</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-signature">
                            <h4>Signature</h4>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-minuman">
                            <h4>Minuman</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-makanan">
                            <h4>Makanan</h4>
                        </a>
                    </li><!-- End tab nav item -->



                </ul>





                <!-- main promo -->
                <div class="tab-content">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3 style="font-family: 'Playfair Display', serif;">Promo Kami</h3>
                        </div>
                        <div style="display: flex;justify-content:center;" class="row gy-5">


                            <?php
                            foreach ($data->result_array() as $a) {
                                $id = $a['id_menu'];
                                $nama = $a['menu_nama'];
                                $deskripsi = $a['menu_deskripsi'];
                                $harga_baru = $a['menu_harga_baru'];
                                $diskon = $a['diskon'];
                                $promo = $a['promo'];
                                $kat_id = $a['menu_kategori_id'];
                                $kat_nama = $a['menu_kategori_nama'];
                                $harga_menu = $a['harga_menu'];
                                $gambar = $a['menu_gambar'];

                            ?>
                            <div style="margin-left: 6px;height:max-content;" class="card">
                                <article style="height: max-content;">

                                    <a data-target="#exampleModalCenter<?php echo base_url()  . $a['id_menu']; ?>"
                                        data-toggle="modal" href="#">
                                        <div class="card-image">
                                            <p
                                                style="font-size:13px;padding: 2px;background:red;color:white;position:absolute;border-radius:4px;margin-top:5px;margin-left:5px;">
                                                <?php echo $promo; ?></p><img
                                                style="padding: 0px;height:155px;width:175px;" class="p-8 rounded-t-lg"
                                                src="<?php echo base_url() . 'assets/gambar/' . $gambar; ?>"
                                                alt="product image" />

                                        </div>


                                        <div style="color: black;" class="heading"> <?php echo $nama ?></div>

                                        <div style="display: flex;height:20px;" class="d-flex-diskon">

                                            <div class="category">
                                                <p style="color:red;font-size:14px;"><?php echo $diskon; ?> %</p>

                                            </div>
                                            <div class="category">
                                                <p
                                                    style="font-size: 14px;color:gray;text-decoration:line-through;font-weight:400;">
                                                    <?php echo $harga_baru; ?></p>
                                            </div>
                                        </div>
                                        <div style="display: flex;justify-content:space-between" class="dflex">

                                            <div style="color: black;font-weight:500;" class="heading">Rp
                                                &nbsp;<?php echo number_format($harga_menu) ?></div>
                                    </a>
                                    <a style="width: 65px;height:30px;padding:5px;"
                                        href="<?php echo base_url() . 'mobile/menu/add_to_cart/' . $a['id_menu']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                                                    focus:outline-none  font-medium rounded-lg text-sm 
                                                     py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                                                    dark:focus:ring-blue-800">Add</a>

                            </div>
                            </article>

                        </div>

                        <?php } ?>

                    </div><!-- End Starter Menu Content -->


                </div>

                <!-- menu signature -->
                <div class="tab-content">

                    <div class="tab-pane fade" id="menu-signature">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3 style="font-family: 'Playfair Display', serif;">Signature</h3>
                        </div>
                        <div style="display: flex;justify-content:center;" class="row gy-5">


                            <?php
                            foreach ($datasignature->result_array() as $a) {
                                $id = $a['menu_id'];
                                $nama = $a['menu_nama'];
                                $deskripsi = $a['menu_deskripsi'];
                                $harga_baru = $a['menu_harga_baru'];
                                $diskon = $a['diskon'];

                                $kat_id = $a['menu_kategori_id'];
                                $kat_nama = $a['menu_kategori_nama'];
                                $harga_menu = $a['harga_menu'];
                                $gambar = $a['menu_gambar'];

                            ?>
                            <div style="margin-left: 6px;height:max-content;" class="card">
                                <article style="height: max-content;">

                                    <a data-target="#exampleModalCenter<?php echo base_url()  . $a['menu_id']; ?>"
                                        data-toggle="modal" href="#">
                                        <div class="card-image">
                                            <img style="padding: 0px;height:155px;width:175px;" class="p-8 rounded-t-lg"
                                                src="<?php echo base_url() . 'assets/gambar/' . $gambar; ?>"
                                                alt="product image" />

                                        </div>


                                        <div style="color: black;" class="heading"> <?php echo $nama ?></div>

                                        <div style="display: flex;height:20px;" class="d-flex-diskon">


                                        </div>
                                        <div style="display: flex;justify-content:space-between;margin-top:-12px;"
                                            class="dflex">

                                            <div style="color: black;font-weight:500;" class="heading">Rp
                                                &nbsp;<?php echo number_format($harga_menu) ?></div>
                                    </a>
                                    <a style="width: 65px;height:30px;padding:5px;"
                                        href="<?php echo base_url() . 'mobile/menu/add_to_cart/' . $a['menu_id']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                            focus:outline-none  font-medium rounded-lg text-sm 
                             py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                            dark:focus:ring-blue-800">Add</a>

                            </div>
                            </article>

                        </div>

                        <?php } ?>

                    </div><!-- End Starter Menu Content -->


                </div>


                <!-- data minum -->
                <div class="tab-content">

                    <div class="tab-pane fade" id="menu-minuman">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3 style="font-family: 'Playfair Display', serif;">Minuman</h3>
                        </div>
                        <div style="display: flex;justify-content:center;" class="row gy-5">


                            <?php
                            foreach ($dataminum->result_array() as $a) {
                                $id = $a['menu_id'];
                                $nama = $a['menu_nama'];
                                $deskripsi = $a['menu_deskripsi'];
                                $harga_baru = $a['menu_harga_baru'];
                                $diskon = $a['diskon'];

                                $kat_id = $a['menu_kategori_id'];
                                $kat_nama = $a['menu_kategori_nama'];
                                $harga_menu = $a['harga_menu'];
                                $gambar = $a['menu_gambar'];

                            ?>
                            <div style="margin-left: 6px;height:max-content;" class="card">
                                <article style="height: max-content;">

                                    <a data-target="#exampleModalCenter<?php echo base_url()  . $a['menu_id']; ?>"
                                        data-toggle="modal" href="#">
                                        <div class="card-image">
                                            <img style="padding: 0px;height:155px;width:175px;" class="p-8 rounded-t-lg"
                                                src="<?php echo base_url() . 'assets/gambar/' . $gambar; ?>"
                                                alt="product image" />

                                        </div>


                                        <div style="color: black;" class="heading"> <?php echo $nama ?></div>

                                        <div style="display: flex;height:20px;" class="d-flex-diskon">


                                        </div>
                                        <div style="display: flex;justify-content:space-between;margin-top:-12px;"
                                            class="dflex">

                                            <div style="color: black;font-weight:500;" class="heading">Rp
                                                &nbsp;<?php echo number_format($harga_menu) ?></div>
                                    </a>
                                    <a style="width: 65px;height:30px;padding:5px;"
                                        href="<?php echo base_url() . 'mobile/menu/add_to_cart/' . $id; ?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                            focus:outline-none  font-medium rounded-lg text-sm 
                             py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                            dark:focus:ring-blue-800">Add</a>

                            </div>
                            </article>

                        </div>

                        <?php } ?>

                    </div><!-- End Starter Menu Content -->


                </div>


                <!-- data makan -->
                <div class="tab-content">

                    <div class="tab-pane fade" id="menu-makanan">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3 style="font-family: 'Playfair Display', serif;">Makanan</h3>
                        </div>
                        <div style="display: flex;justify-content:center;" class="row gy-5">


                            <?php
                            foreach ($datamakanan->result_array() as $a) {
                                $id = $a['menu_id'];
                                $nama = $a['menu_nama'];
                                $deskripsi = $a['menu_deskripsi'];
                                $harga_baru = $a['menu_harga_baru'];
                                $diskon = $a['diskon'];

                                $kat_id = $a['menu_kategori_id'];
                                $kat_nama = $a['menu_kategori_nama'];
                                $harga_menu = $a['harga_menu'];
                                $gambar = $a['menu_gambar'];

                            ?>
                            <div style="margin-left: 6px;height:max-content;" class="card">
                                <article style="height: max-content;">

                                    <a data-target="#exampleModalCenter<?php echo base_url()  . $a['menu_id']; ?>"
                                        data-toggle="modal" href="#">
                                        <div class="card-image">
                                            <img style="padding: 0px;height:155px;width:175px;" class="p-8 rounded-t-lg"
                                                src="<?php echo base_url() . 'assets/gambar/' . $gambar; ?>"
                                                alt="product image" />

                                        </div>


                                        <div style="color: black;" class="heading"> <?php echo $nama ?></div>

                                        <div style="display: flex;height:20px;" class="d-flex-diskon">


                                        </div>
                                        <div style="display: flex;justify-content:space-between;margin-top:-12px;"
                                            class="dflex">

                                            <div style="color: black;font-weight:500;" class="heading">Rp
                                                &nbsp;<?php echo number_format($harga_menu) ?></div>
                                    </a>
                                    <a style="width: 65px;height:30px;padding:5px;"
                                        href="<?php echo base_url() . 'mobile/menu/add_to_cart/' . $a['menu_id']; ?>"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                            focus:outline-none  font-medium rounded-lg text-sm 
                            py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                            dark:focus:ring-blue-800">Add</a>

                            </div>
                            </article>

                        </div>

                        <?php } ?>

                    </div><!-- End Starter Menu Content -->


                </div>


            </div>

            </div>
        </section><!-- End Menu Section -->



        <!-- MODAL -->
        <!-- Button trigger modal -->


        <!-- Modal -->


        <!-- Modal -->


        <?php
        foreach ($data->result_array() as $a) {
            $id = $a['id_menu'];
            $nama = $a['menu_nama'];
            $deskripsi = $a['menu_deskripsi'];
            $harga_menu = $a['harga_menu'];

            $gambar = $a['menu_gambar'];
            $diskon = $a['diskon'];
            $periode_awal = $a['tgl_awal_promo'];
            $periode_akhir = $a['tgl_akhir_promo'];



        ?>
        <div class="modal fade" id="exampleModalCenter<?php echo base_url()  . $a['id_menu']; ?>" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div style="width: 400px;" class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-weight: 600;font-size:14px;" class="modal-title" id="exampleModalLongTitle">
                            Menu Belig Coffee
                        </h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="image">
                            <p
                                style="font-weight:700;font-size:15px;padding: 5px;background:red;color:white;position:absolute;border-radius:4px;margin-top:5px;margin-left:5px;">
                                <?php echo $a['diskon']; ?>&nbsp;% &nbsp;Off</p>
                            <img style="border-radius: 5px;height:250px;width:366px;"
                                src="<?php echo base_url() . 'assets/gambar/' . $a['menu_gambar'] ?>" />
                        </div>
                        <h5 style="color: black;font-weight:700;margin-bottom:8px;margin-top:8px;">
                            <?php echo $a['menu_nama'] ?></h5>

                        <p
                            style="padding:4px;font-size:13px; color:#00AA13;width:max-content;border-radius:4px;font-weight:500;">
                            <label style="color:black;" for="promoperiode">Promo hingga :</label>
                            <?php echo $a['tgl_awal_promo'] ?> s/d
                            <?php echo $a['tgl_akhir_promo'] ?>
                        </p>
                        <p style="font-size: 16px;color:black;"><?php echo $deskripsi; ?></p>


                        <div class="review-customer">
                            <h2 style="font-size: 14px;font-weight:bold;">Review Pelanggan</h2>
                            <div style="height:80px;overflow-y:scroll;" class="scroll">
                                <div style="height: max-content ; background:#EDE4ff;color:black;padding:5px;margin-top:5px;"
                                    class="box-container">
                                    <div style="display: block;" class="content">
                                        <?php foreach ($review->result_array() as $b) {
                                                    $plg_nama = $b['plg_nama'];
                                                    $rating = $b['rating'];
                                                    $isi_review = $b['isi_review'];
                                                    $tgl_review   = $b['tanggal_review'];



                                                ?>
                                        <div style="display: flex;height:25px;" class="rate">

                                            <p><img style="width: 20px;height:20px;margin:0;"
                                                    src="<?php echo base_url() . 'assets/images/rating.png' ?>" alt="">
                                            </p>
                                            <p> <?php echo $rating; ?></p>
                                            <p style="font-weight: bold;margin-left:20px;">
                                                <?php echo $plg_nama; ?></p>
                                            <p style="margin-left: 10px;font-size:12px;"><?php echo $tgl_review; ?></p>
                                        </div>
                                        <p><?php echo $isi_review; ?></p>
                                        <?php } ?>
                                    </div>

                                </div>

                            </div>
                        </div>




                    </div>
                    <div style="display: flex;justify-content:space-between;" class="modal-footer">
                        <h3 style="font-size: 18px;font-weight:800;">Rp &nbsp;<?php echo number_format($harga_menu); ?>
                        </h3>

                        <div style="display: flex;" class="btn-cl">
                            <a style="width: 105px;height:30px;padding:5px;margin-right:8px;background:#EDE4ff;color:#4942E4;"
                                href="<?php echo base_url() . 'mobile/review/givereview/' . $a['id_menu']; ?>" class=" bg-yellow-700 hover:bg-blue-800 focus:ring-4 
                                            focus:outline-none  font-medium rounded-lg text-sm 
                                            py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                                            dark:focus:ring-blue-800">Beri Ulasan</a>
                            <a style="width: 90px;height:30px;padding:5px;"
                                href="<?php echo base_url() . 'mobile/menu/add_to_cart/' . $a['id_menu']; ?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                                        focus:outline-none  font-medium rounded-lg text-sm 
                                        py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                                        dark:focus:ring-blue-800">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <!--end -->


        <!-- signature -->
        <?php
        foreach ($datasignature->result_array() as $a) {
            $id = $a['menu_id'];
            $nama = $a['menu_nama'];
            $deskripsi = $a['menu_deskripsi'];
            $harga_menu = $a['harga_menu'];
            $kat_id = $a['menu_kategori_id'];
            $gambar = $a['menu_gambar'];


        ?>
        <div class="modal fade" id="exampleModalCenter<?php echo base_url()  . $a['menu_id']; ?>" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div style="width: 400px;" class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-weight: 600;font-size:14px;" class="modal-title" id="exampleModalLongTitle">
                            Menu Belig Coffee
                        </h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="image">

                            <img style="border-radius: 5px;height:250px;width:366px;"
                                src="<?php echo base_url() . 'assets/gambar/' . $a['menu_gambar'] ?>" />
                        </div>
                        <h5 style="color: black;font-weight:700;margin-bottom:8px;margin-top:8px;">
                            <?php echo $a['menu_nama'] ?></h5>



                        <p style="font-size: 16px;color:black;"><?php echo $deskripsi; ?></p>
                    </div>
                    <div style="display: flex;justify-content:space-between;" class="modal-footer">
                        <h3 style="font-size: 18px;font-weight:800;">Rp &nbsp;<?php echo number_format($harga_menu); ?>
                        </h3>
                        <a style="width: 135px;height:40px;padding:10px;"
                            href="<?php echo base_url() . 'mobile/menu/add_to_cart/' . $a['menu_id']; ?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                        focus:outline-none  font-medium rounded-lg text-sm 
                         py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                        dark:focus:ring-blue-800">Tambah Pesanan</a>

                    </div>
                </div>
            </div>
        </div>
        <?php } ?>


        <!-- Data minum -->
        <?php
        foreach ($dataminum->result_array() as $a) {
            $id = $a['menu_id'];
            $nama = $a['menu_nama'];
            $deskripsi = $a['menu_deskripsi'];
            $harga_menu = $a['harga_menu'];
            $kat_id = $a['menu_kategori_id'];
            $gambar = $a['menu_gambar'];


        ?>
        <div class="modal fade" id="exampleModalCenter<?php echo base_url()  . $a['menu_id']; ?>" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div style="width: 400px;" class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-weight: 600;font-size:14px;" class="modal-title" id="exampleModalLongTitle">
                            Menu Belig Coffee
                        </h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="image">

                            <img style="border-radius: 5px;height:250px;width:366px;"
                                src="<?php echo base_url() . 'assets/gambar/' . $a['menu_gambar'] ?>" />
                        </div>
                        <h5 style="color: black;font-weight:700;margin-bottom:8px;margin-top:8px;">
                            <?php echo $a['menu_nama'] ?></h5>



                        <p style="font-size: 16px;color:black;"><?php echo $deskripsi; ?></p>
                    </div>
                    <div style="display: flex;justify-content:space-between;" class="modal-footer">
                        <h3 style="font-size: 18px;font-weight:800;">Rp &nbsp;<?php echo number_format($harga_menu); ?>
                        </h3>
                        <a style="width: 135px;height:40px;padding:10px;"
                            href="<?php echo base_url() . 'mobile/menu/add_to_cart/' . $a['menu_id']; ?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                        focus:outline-none  font-medium rounded-lg text-sm 
                         py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                        dark:focus:ring-blue-800">Tambah Pesanan</a>

                    </div>
                </div>
            </div>
        </div>
        <?php } ?>



        <!-- data makanan -->
        <?php
        foreach ($datamakanan->result_array() as $a) {
            $id = $a['menu_id'];
            $nama = $a['menu_nama'];
            $deskripsi = $a['menu_deskripsi'];
            $harga_menu = $a['harga_menu'];
            $kat_id = $a['menu_kategori_id'];
            $gambar = $a['menu_gambar'];


        ?>
        <div class="modal fade" id="exampleModalCenter<?php echo base_url()  . $a['menu_id']; ?>" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div style="width: 400px;" class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-weight: 600;font-size:14px;" class="modal-title" id="exampleModalLongTitle">
                            Menu Belig Coffee
                        </h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="image">

                            <img style="border-radius: 5px;height:250px;width:366px;"
                                src="<?php echo base_url() . 'assets/gambar/' . $a['menu_gambar'] ?>" />
                        </div>
                        <h5 style="color: black;font-weight:700;margin-bottom:8px;margin-top:8px;">
                            <?php echo $a['menu_nama'] ?></h5>



                        <p style="font-size: 16px;color:black;"><?php echo $deskripsi; ?></p>
                    </div>
                    <div style="display: flex;justify-content:space-between;" class="modal-footer">
                        <h3 style="font-size: 18px;font-weight:800;">Rp &nbsp;<?php echo number_format($harga_menu); ?>
                        </h3>
                        <a style="width: 135px;height:40px;padding:10px;"
                            href="<?php echo base_url() . 'mobile/menu/add_to_cart/' . $a['menu_id']; ?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                        focus:outline-none  font-medium rounded-lg text-sm 
                         py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                        dark:focus:ring-blue-800">Tambah Pesanan</a>

                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </main>
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Alamat Kami</h4>
                        <p>
                            Jalan Puri Kartika Baru, RT 003/RW007 <br>
                            Sudimara Selatan, Ciledug, Kota Tangerang.<br>
                        </p>
                    </div>

                </div>



                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Jam Buka</h4>
                        <p>
                            <strong>Setiap Hari : 4PM</strong> - 23PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>



            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Belig Coffee</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/../yummy-bootstrap-restaurant-website-template/ -->
                Designed by ALdrin
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../yummy/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../yummy/assets/vendor/aos/aos.js"></script>
    <script src="../yummy/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../yummy/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../yummy/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../yummy/assets/vendor/php-email-form/validate.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Template Main JS File -->
    <script src="../yummy/assets/js/main.js"></script>


    <style>
    body {
        font-family: 'Rubik', sans-serif;
    }

    .card {
        width: 190px;
        height: 274px;
        background: white;
        padding: .4em;
        border-radius: 6px;
    }

    .card-image {
        background-color: rgb(236, 236, 236);
        width: 100%;
        height: 60%;
        border-radius: 6px 6px 0 0;
    }

    .card-image:hover {
        transform: scale(0.98);
    }

    .category {
        text-transform: uppercase;
        font-size: 0.7em;
        font-weight: 600;
        color: rgb(63, 121, 230);
        padding: 10px 7px 0;
    }

    .category:hover {
        cursor: pointer;
    }

    .heading {
        font-weight: 600;
        color: rgb(88, 87, 87);
        padding: 7px;
    }

    .heading:hover {
        cursor: pointer;
    }

    .author {
        color: gray;
        font-weight: 400;
        font-size: 11px;
        padding-top: 20px;
    }

    .name {
        font-weight: 600;
    }

    .name:hover {
        cursor: pointer;
    }
    </style>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</html>