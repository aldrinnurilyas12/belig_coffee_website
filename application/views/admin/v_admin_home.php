<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard Belig Coffee</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../adminbelig/assets/img/favicon.png" rel="icon">
    <link href="../adminbelig/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../adminbelig/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../adminbelig/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../adminbelig/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../adminbelig/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../adminbelig/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../adminbelig/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../adminbelig/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../adminbelig/assets/css/style.css" rel="stylesheet">


</head>

<body>



    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <!-- <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div> -->

                                <div class="card-body">

                                    <?php
                                    $penjualan = $pen_last->row_array();
                                    ?>
                                    <h5 class="card-title">Penjualan </h5>

                                    <div class="d-flex align-items-center">
                                        <div style="width: 50px;height:50px;" class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php echo $penjualan['total_pemesanan'] ?></h6>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <?php
                                    $c = $pen_now->row_array();
                                    ?>
                                    <h5 class="card-title">Pendapatan </h5>

                                    <div class="d-flex align-items-center">
                                        <div style="width: 50px;height:50px;" class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php echo 'Rp ' . number_format($c['total_pendapatan']); ?></h6>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->


                        <!-- portion Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <!-- <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div> -->

                                <div class="card-body">
                                    <?php
                                    $p = $tot_porsi->row_array();
                                    ?>
                                    <h5 class="card-title">Porsi Terjual </h5>

                                    <div class="d-flex align-items-center">
                                        <div style="width: 50px;height:50px;" class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?php echo $p['total_porsi'] ?></h6>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->


                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <!-- <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div> -->

                                <div class="card-body">
                                    <?php
                                    $t = $tot_plg->row_array();
                                    ?>
                                    <h5 class="card-title">Pelanggan </h5>

                                    <div class="d-flex align-items-center">
                                        <div style="width: 50px;height:50px;" class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">

                                            <h6><?php echo $t['tot_pelanggan'];  ?></h6>


                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->
                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <!-- <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div> -->

                                <div class="card-body">
                                    <?php
                                    $testi = $tot_testimonial->row_array();
                                    ?>
                                    <h5 class="card-title">Testimonial </h5>

                                    <div class="d-flex align-items-center">
                                        <div style="width: 50px;height:50px;" class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">

                                            <h6><?php echo $testi['tot_testi'];  ?></h6>


                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div><!-- End Customers Card -->



                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <!-- <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div> -->

                                <div class="card-body">
                                    <?php
                                    $x = $done_keluhan->row_array();
                                    $z = $belum_keluhan->row_array();
                                    ?>
                                    <h5 class="card-title">Keluhan Pelanggan </h5>

                                    <div class="d-flex align-items-center">
                                        <div style="width: 50px;height:50px;" class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div style="display: flex;" class="flex-items">
                                            <div class="ps-3">

                                                <h6><?php echo $x['tot_keluhan'];  ?></h6>
                                                <span class="text-success small pt-1 fw-bold">Ditanggapi</span>

                                            </div>

                                            <div style="margin-left: 40px;" class="ps-3">

                                                <h6><?php echo $z['belum_keluhan'];  ?></h6>
                                                <span class="text-danger small pt-1 fw-bold">Belum ditanggapi</span>

                                            </div>
                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div><!-- End Customers Card -->

                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">



                                <div class="card-body">
                                    <?php
                                    $reservasi = $total_booking->row_array();
                                    ?>
                                    <h5 class="card-title">Booking Meja Pelanggan </h5>

                                    <div class="d-flex align-items-center">
                                        <div style="width: 50px;height:50px;" class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">

                                            <h6><?php echo $reservasi['total_booking'];  ?></h6>


                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">



                                <div class="card-body">
                                    <?php
                                    $total_bayar = $total_bayar->row_array();
                                    ?>
                                    <h5 class="card-title">Pembayaran Reservasi </h5>

                                    <div class="d-flex align-items-center">
                                        <div style="width: 50px;height:50px;" class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">

                                            <h6><?php echo $total_bayar['total'];  ?></h6>


                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div><!-- End Left side columns -->



            </div>
            </div>
            </div>


            <!-- CARD TOP PELANGGAN -->
            <div style="display: flex;" class="flex-top">


                <div class="col-6">
                    <div class="card top-selling overflow-auto">





                        <div class="card-body pb-0">
                            <h5 class="card-title">Top Pelanggan </h5>

                            <table class="table table-borderless">

                                <thead>
                                    <tr>
                                        <!-- <th scope="col">Gambar</th> -->
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jumlah Transaksi</th>
                                        <th scope="col">Status</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($top_pelanggan->result_array() as $list) : ?>
                                        <tr>
                                            <!-- <th scope="row"><a href="#"><img
                                                    src="<?php echo base_url() . 'assets/gambar/' . $list['menu_gambar']; ?>"
                                                    alt=""></a></th> -->
                                            <td><?php echo $list['plg_nama']; ?></td>
                                            <td><?php echo number_format($list['total_transaksi']); ?></td>
                                            <td style="color: green;font-weight:600;"><?php echo $list['status'] ?></td>
                                            <td class="fw-bold"></td>
                                            <td></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>


                    </div>
                </div>


                <div style="margin-left: 10px;" class="col-6">
                    <div class="card top-selling overflow-auto">





                        <div class="card-body pb-0">
                            <h5 class="card-title">Top Penjualan Menu </h5>

                            <table class="table table-borderless">

                                <thead>
                                    <tr>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Menu</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Terjual</th>
                                        <th scope="col">Pendapatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($top_menu->result_array() as $list) : ?>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="<?php echo base_url() . 'assets/gambar/' . $list['menu_gambar']; ?>" alt=""></a></th>
                                            <td><?php echo $list['menu_nama']; ?></td>
                                            <td><?php echo number_format($list['detail_harjul']); ?></td>
                                            <td><?php echo $list['terjual'] ?></td>
                                            <td>Rp <?php echo number_format($list['pendapatan']) ?></td>
                                            <td class="fw-bold"></td>
                                            <td></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>


                    </div>
                </div>
            </div>

        </section>

    </main><!-- End #main -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../adminbelig/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../adminbelig/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../adminbelig/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../adminbelig/assets/vendor/echarts/echarts.min.js"></script>
    <script src="../adminbelig/assets/vendor/quill/quill.min.js"></script>
    <script src="../adminbelig/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../adminbelig/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../adminbelig/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../adminbelig/assets/js/main.js"></script>

</body>

</html>