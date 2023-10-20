<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Menu</title>
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

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="../../adminbelig/assets/img/logo.png" alt="">
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

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
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

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="../../adminbelig/assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="../../adminbelig/assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="../../adminbelig/assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../../adminbelig/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->


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
                            <h1 style="font-size: 20px;" class="card-title">Data Pemesanan Pelanggan</h1>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>

                                        <th scope="col">No Invoice</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Pelanggan</th>
                                        <th scope="col">Total</th>

                                        <th scope="col">Status Order</th>
                                        <th class="text-right">Actions</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($data->result_array() as $a) {
                                        $no++;
                                        $id = $a['inv_no'];
                                        $tanggal = $a['inv_tanggal'];
                                        $plg_id = $a['inv_plg_id'];
                                        $plg_nama = $a['inv_plg_nama'];
                                        $status = $a['inv_status'];

                                        $total = $a['inv_total'];

                                    ?>
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $tanggal; ?></td>
                                            <td><?php echo $plg_nama; ?></td>
                                            <td><?php echo number_format($total); ?></td>

                                            <td><?php echo $status; ?></td>
                                            <td class="text-right">
                                                <a href="#" class="btn btn-icon-toggle" title="Update Status Order" data-toggle="modal" data-target="#modal_edit_pengguna<?php echo $id; ?>"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-icon-toggle" title="Detail Order" data-toggle="modal" data-target="#modal_detail<?php echo $id; ?>"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="btn btn-icon-toggle" title="Batalkan Order" data-toggle="modal" data-target="#modal_hapus_pengguna<?php echo $id; ?>"><i class="fa fa-close"></i></a>
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
        <!-- ============ MODAL EDIT PENGGUNA =============== -->
        <?php
        foreach ($data->result_array() as $a) {
            $id = $a['inv_no'];
            $tanggal = $a['inv_tanggal'];
            $plg_id = $a['inv_plg_id'];
            $plg_nama = $a['inv_plg_nama'];
            $status = $a['inv_status'];
            $total = $a['inv_total'];

        ?>
            <div class="modal fade" id="modal_detail<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="modal-title" id="myModalLabel">#<?php echo $id; ?></h3>
                        </div>
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
                                                $query = $this->db->query("SELECT * FROM tbl_detail WHERE detail_pemesanan_id='$id'");
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
                                                    <td style="text-align:center;"><?php echo number_format($total); ?></td>
                                                </tr>
                                            </tfoot>

                                        </table>
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
                </div>
            </div>
        <?php } ?>


        <!-- ============ MODAL EDIT PENGGUNA =============== -->
        <?php
        foreach ($data->result_array() as $a) {
            $id = $a['inv_no'];
            $tanggal = $a['inv_tanggal'];
            $plg_id = $a['inv_plg_id'];
            $plg_nama = $a['inv_plg_nama'];
            $status = $a['inv_status'];
            $total = $a['inv_total'];


        ?>
            <div class="modal fade" id="modal_edit_pengguna<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="modal-title" id="myModalLabel">Update Status Order</h3>
                        </div>
                        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url() . 'admin/order/update_order' ?>" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="regular13" class="col-sm-3 control-label">Pilih</label>
                                    <input type="hidden" name="kode" value="<?php echo $id; ?>">
                                    <div class="col-sm-8">
                                        <select name="status" class="form-control" id="regular13" required>
                                            <?php foreach ($stts->result_array() as $st) {
                                                $st_id = $st['status_id'];
                                                $st_nm = $st['status_nama'];
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
                </div>
            </div>
        <?php } ?>

        <!-- ============ MODAL HAPUS PENGGUNA =============== -->
        <?php
        foreach ($data->result_array() as $a) {
            $id = $a['inv_no'];
            $tanggal = $a['inv_tanggal'];
            $plg_id = $a['inv_plg_id'];
            $plg_nama = $a['inv_plg_nama'];
            $status = $a['inv_status'];
            $total = $a['inv_total'];

        ?>
            <div class="modal fade" id="modal_hapus_pengguna<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="modal-title" id="myModalLabel">Hapus Kategori</h3>
                        </div>
                        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url() . 'admin/order/hapus_order' ?>" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="regular13" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-8">
                                        <input type="hidden" name="kode" value="<?php echo $id; ?>">
                                        <p>Apakah Anda yakin mau menghapus data <b><?php echo $id; ?></b> ?</p>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                <button class="btn btn-primary" type="submit"><span class="fa fa-trash"></span>
                                    Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

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