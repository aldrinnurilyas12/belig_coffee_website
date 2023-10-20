<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Booking Meja</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../adminbelig/assets/img/favicon.png" rel="icon">
    <link href="../../adminbelig/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.css' ?>" />

    <link href="../../adminbelig/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/simple-datatables/style.css" rel="stylesheet">




    <!-- Template Main CSS File -->
    <link href="../../adminbelig/assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header style="background-color: white;" id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="../adminbelig/assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Belig Coffee</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <!-- <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <span class="badge bg-primary badge-number">4</span>
            </a><!-- End Notification Icon -->

                <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                <li class="dropdown-header">
                    You have 4 new notifications
                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <i class="bi bi-exclamation-circle text-warning"></i>
                    <div>
                        <h4>Lorem Ipsum</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>30 min. ago</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <i class="bi bi-x-circle text-danger"></i>
                    <div>
                        <h4>Atque rerum nesciunt</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>1 hr. ago</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <i class="bi bi-check-circle text-success"></i>
                    <div>
                        <h4>Sit rerum fuga</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>2 hrs. ago</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li class="notification-item">
                    <i class="bi bi-info-circle text-primary"></i>
                    <div>
                        <h4>Dicta reprehenderit</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>4 hrs. ago</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>
                <li class="dropdown-footer">
                    <a href="#">Show all notifications</a>
                </li>

            </ul>End Notification Dropdown Items -->

                <!-- </li> -->


                <li class="nav-item dropdown pe-3">




                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../adminbelig/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"> <?php
                                                                                if ($this->session->userdata('user')) {
                                                                                ?>
                            <?php echo $this->session->userdata('nama');
                                                                                } ?></span>
                    </a><!-- End Profile Iamge Icon -->


                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">




                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url() . 'administrator/logout' ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <aside style="background-color: #212121;" id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url() ?>admin/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a style="background-color: #424242;" class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person"></i><span style="color: white;">Master</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?php echo base_url() ?>admin/pelanggan">
                            <i class="bi bi-circle"></i><span style="color: white;">Data Pelanggan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/menu">
                            <i class="bi bi-circle"></i><span style="color: white;">Entry Data Menu</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/menu/load_menu">
                            <i class="bi bi-circle"></i><span style="color: white;">Data Menu</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a style="background-color: #424242;" class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span style="color: white;">Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?php echo base_url() ?>admin/order">
                            <i class="bi bi-circle"></i><span style="color: white;">Pemesanan Dine In</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() ?>admin/databooking">
                            <i class="bi bi-circle"></i><span style="color: white;">Booking Meja</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() ?>admin/order/datapembayaran">
                            <i class="bi bi-circle"></i><span style="color: white;">Pembayaran Booking</span>
                        </a>
                    </li>



                    <li>
                        <a href="<?php echo base_url() ?>admin/testimonial">
                            <i class="bi bi-circle"></i><span style="color: white;">Testimonial</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/pengguna/keluhan">
                            <i class="bi bi-circle"></i><span style="color: white;">Keluhan</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a style="background-color: #424242;" class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span style="color: white;">Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?php echo base_url() ?>admin/laporanpenjualan">
                            <i class="bi bi-circle"></i><span style="color: white;">Laporan Pemesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/testimonial/cetak_laporan">
                            <i class="bi bi-circle"></i><span style="color: white;">Laporan Testimonial</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>admin/dashboard/cetak_keluhan">
                            <i class="bi bi-circle"></i><span style="color: white;">Laporan Keluhan Pelanggan</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() ?>admin/laporanpenjualan/laporanmenu">
                            <i class="bi bi-circle"></i><span style="color: white;">Laporan Penjualan Menu</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->




        </ul>

    </aside><!-- End Sidebar-->



    <!-- ============================================================================================================================== -->


    <main id="main" class="main">

        <div class="pagetitle">

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h1 style="font-size: 20px;" class="card-title">Data Booking Meja Pelanggan</h1>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">No Booking</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Pelanggan</th>
                                        <th scope="col">Tamu</th>
                                        <th scope="col">No Meja</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status Bayar</th>
                                        <th class="text-right">Actions</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($databooking->result_array() as $a) {




                                        $id = $a['booking_id'];
                                        $tanggal = $a['tanggal_booking'];
                                        $plg_id = $a['plg_id'];
                                        $plg_nama = $a['plg_nama'];
                                        $tamu   = $a['jumlah_tamu'];
                                        $meja   = $a['no_meja'];
                                        $status = $a['status_bayar'];
                                        $total = $a['total'];

                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $tanggal; ?></td>
                                            <td><?php echo $plg_nama; ?></td>
                                            <td><?php echo $tamu; ?></td>
                                            <td><?php echo $meja; ?></td>
                                            <td><?php echo number_format($total); ?></td>

                                            <td><?php echo $status; ?></td>
                                            <td class="text-right">


                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $id; ?>">Status</button>

                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal<?php echo $id; ?>">Detail</button>




                                            </td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>












        <!-- ============ MODAL show pemesanan================ -->
        <?php
        foreach ($databooking->result_array() as $a) {
            $id = $a['booking_id'];
            $tanggal = $a['tanggal_booking'];
            $plg_id = $a['plg_id'];
            $plg_nama = $a['plg_nama'];
            $status = $a['status_bayar'];
            $notes = $a['notes'];
            $meja = $a['no_meja'];
            $total = $a['total'];

        ?>
            <div class="modal" id="basicModal<?php echo $id; ?>" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel">#<?php echo $id; ?></h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" role="form" method="post" action="<?php echo base_url() . 'admin/order/update_order' ?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <table>
                                                <tr>
                                                    <td style="width:120px;">Tanggal</td>
                                                    <td>:</td>
                                                    <td><?php echo $tanggal; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pelanggan</td>
                                                    <td>:</td>
                                                    <td><?php echo $plg_nama; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Status Order</td>
                                                    <td>:</td>
                                                    <td><?php echo $status; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Notes</td>
                                                    <td>:</td>
                                                    <td><?php echo $notes; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor Meja</td>
                                                    <td>:</td>
                                                    <td><?php echo $meja; ?></td>
                                                </tr>

                                            </table><br />
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Menu</th>
                                                        <th style="text-align:center;">Harga</th>
                                                        <th style="text-align:center;">Porsi</th>
                                                        <th style="text-align:center;">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = $this->db->query("SELECT * FROM booking_detail WHERE detail_booking_id='$id'");
                                                    foreach ($query->result_array() as $j) {
                                                        $menu_nama = $j['detail_menu_nama'];
                                                        $menu_harjul = $j['detail_harjul'];
                                                        $menu_porsi = $j['detail_porsi'];
                                                        $menu_subtotal = $j['detail_subtotal'];

                                                    ?>
                                                        <tr>
                                                            <td><?php echo $menu_nama; ?></td>
                                                            <td style="text-align:center;">
                                                                <?php echo number_format($menu_harjul); ?>
                                                            </td>
                                                            <td style="text-align:center;"><?php echo $menu_porsi; ?></td>
                                                            <td style="text-align:center;">
                                                                <?php echo number_format($menu_subtotal); ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="3">Total</td>
                                                        <td style="text-align:center;"><?php echo number_format($total); ?>
                                                        </td>
                                                    </tr>
                                                </tfoot>

                                            </table>
                                        </div>
                                    </div>


                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>




        <!-- ============ MODAL EDIT pemesanan================ -->

        <?php
        foreach ($databooking->result_array() as $a) {
            $id = $a['booking_id'];
            $tanggal = $a['tanggal_booking'];
            $plg_id = $a['plg_id'];


        ?>

            <div class="modal" id="editModal<?php echo $id; ?>" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel">#<?php echo $id; ?></h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" role="form" method="post" action="<?php echo base_url() . 'admin/databooking/update_status' ?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="regular13" class="col-sm-3 control-label">Pilih</label>
                                        <input type="hidden" name="kode" value="<?php echo $id; ?>">
                                        <div class="col-sm-8">
                                            <select name="status" class="form-control" id="regular13" required>
                                                <?php foreach ($status_data->result_array() as $st) {
                                                    $st_id = $st['status_booking_id'];
                                                    $st_nm = $st['nama_status'];
                                                ?>
                                                    <option value="<?php echo $st_nm; ?>"><?php echo $st_nm; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                    <button class="btn btn-primary" type="submit"><span class="fa fa-edit"></span>
                                        Update</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>





















    </main><!-- End #main -->




    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../adminbelig/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../../adminbelig/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../adminbelig/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../../adminbelig/assets/vendor/echarts/echarts.min.js"></script>
    <script src="../../adminbelig/assets/vendor/quill/quill.min.js"></script>
    <script src="../../adminbelig/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../../adminbelig/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../../adminbelig/assets/vendor/php-email-form/validate.js"></script>


    <!-- Template Main JS File -->
    <script src="../../adminbelig/assets/js/main.js"></script>

</body>

</html>