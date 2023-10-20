<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ubah data Menu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../../adminbelig/assets/img/favicon.png" rel="icon">
    <link href="../../../adminbelig/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../../adminbelig/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../../adminbelig/assets/css/style.css" rel="stylesheet">

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
                <img src="../../../adminbelig/assets/img/logo.png" alt="">
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
                                <img src="../../../adminbelig/assets/img/messages-1.jpg" alt="" class="rounded-circle">
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
                                <img src="../../../adminbelig/assets/img/messages-2.jpg" alt="" class="rounded-circle">
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
                                <img src="../../../adminbelig/assets/img/messages-3.jpg" alt="" class="rounded-circle">
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
                        <img src="../../../adminbelig/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
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

    <!-- ======= Sidebar ======= -->
    <aside style="background-color: #212121;" id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url() ?>admin/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a style="background-color: #424242;" class="nav-link collapsed" data-bs-target="#components-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person"></i><span style="color: white;">Master</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?php echo base_url() ?>admin/pelanggan">
                            <i class="bi bi-circle"></i><span style="color: white;">Data Pelanggan</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
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
                <a style="background-color: #424242;" class="nav-link collapsed" data-bs-target="#forms-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span style="color: white;">Transaksi</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span style="color: white;">Pemesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>../admin/testimonial">
                            <i class="bi bi-circle"></i><span style="color: white;">Testimonial</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Forms Nav -->


            <li class="nav-item">
                <a style="background-color: #424242;" class="nav-link collapsed" data-bs-target="#tables-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span style="color: white;">Laporan</span><i
                        class="bi bi-chevron-down ms-auto"></i>
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
                </ul>
            </li>
            <!-- End Tables Nav -->




        </ul>

    </aside><!-- End Sidebar-->

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

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ubah Data Menu</h5>

                <!-- Multi Columns Form -->
                <form action="<?php echo base_url(); ?>admin/editmenu/ubah" method="post" enctype="multipart/form-data"
                    class="row g-3" novalidate>
                    <div class="col-md-3">

                        <input type="text" name="menu_id" value="<?php echo $menu_id ?>" class="form-control"
                            id="inputName5" autocomplete="off" readonly>
                    </div>
                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Nama Menu</label>
                        <input type="text" name="nama" value="<?php echo $menu_nama ?>" class="form-control"
                            id="inputName5" autocomplete="off">
                    </div>
                    <div class="col-md-5">
                        <label for="inputEmail5" class="form-label">Harga</label>
                        <input type="text" value="<?php echo $menu_harga_baru ?>" name="menu_harga_baru"
                            class="form-control" id="price" autocomplete="off">
                    </div>
                    <div class="col-md-3">
                        <label for="inputPassword5" class="form-label">Diskon (%)</label>
                        <input type="text" name="diskon" class="form-control" value="<?php echo $diskon ?>" id="mrp"
                            autocomplete="off">
                    </div>
                    <div class="col-md-3">
                        <label for="inputPassword5" class="form-label">Harga Diskon</label>
                        <input type="text" value="<?php echo $harga_diskon ?>" name="harga_diskon" class="form-control"
                            id="discount">
                    </div>
                    <div class="col-md-5">
                        <label for="inputPassword5" class="form-label">Total Harga</label>
                        <input type="text" value="<?php echo $harga_menu ?>" name="harga_menu" class="form-control"
                            id="TotalDiscount">
                    </div>
                    <div class="col-md-3">
                        <label for="inputAddress5" class="form-label">Deskripsi Menu</label>
                        <textarea name="deskripsi" class="form-control"
                            id="inputAddres5s"><?php echo $menu_deskripsi ?> </textarea>
                    </div>


                    <div class="col-md-5">
                        <label for="inputPassword5" class="form-label">Apakah promo?</label>
                        <label style="border: 0px;font-weight:bold;" class="form-control">
                            <input style="width: 18px;height:18px;" value="promo" type="radio" name="promo" />
                            Promo
                        </label>

                        <label style="border: 0px;font-weight:bold;" class="form-control">
                            <input style="width: 18px;height:18px;" value="tidak" type="radio" name="promo" />
                            Tidak Promo
                        </label>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Foto</label>
                        <td><img style="width: 100px;height:100px;"
                                src="<?php echo base_url() . 'assets/gambar/' . $menu_gambar; ?>">
                        </td>
                        <input type="file" class="form-control" name="filefoto"
                            value="<?php echo base_url() . 'assets/gambar/' . $menu_gambar; ?>" placeholder="Foto">


                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- End Multi Columns Form -->

            </div>
        </div>


    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../../adminbelig/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../../../adminbelig/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../adminbelig/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../../../adminbelig/assets/vendor/echarts/echarts.min.js"></script>
    <script src="../../../adminbelig/assets/vendor/quill/quill.min.js"></script>
    <script src="../../../adminbelig/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../../../adminbelig/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../../../adminbelig/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../../adminbelig/assets/js/main.js"></script>

    <script>
    function validate(val) {
        v1 = document.getElementById("fname");
        v2 = document.getElementById("lname");
        v3 = document.getElementById("email");
        v4 = document.getElementById("mob");
        v5 = document.getElementById("job");
        v6 = document.getElementById("ans");

        flag1 = true;
        flag2 = true;
        flag3 = true;
        flag4 = true;
        flag5 = true;
        flag6 = true;

        if (val >= 1 || val == 0) {
            if (v1.value == "") {
                v1.style.borderColor = "red";
                flag1 = false;
            } else {
                v1.style.borderColor = "green";
                flag1 = true;
            }
        }

        if (val >= 2 || val == 0) {
            if (v2.value == "") {
                v2.style.borderColor = "red";
                flag2 = false;
            } else {
                v2.style.borderColor = "green";
                flag2 = true;
            }
        }
        if (val >= 3 || val == 0) {
            if (v3.value == "") {
                v3.style.borderColor = "red";
                flag3 = false;
            } else {
                v3.style.borderColor = "green";
                flag3 = true;
            }
        }
        if (val >= 4 || val == 0) {
            if (v4.value == "") {
                v4.style.borderColor = "red";
                flag4 = false;
            } else {
                v4.style.borderColor = "green";
                flag4 = true;
            }
        }
        if (val >= 5 || val == 0) {
            if (v5.value == "") {
                v5.style.borderColor = "red";
                flag5 = false;
            } else {
                v5.style.borderColor = "green";
                flag5 = true;
            }
        }
        if (val >= 6 || val == 0) {
            if (v6.value == "") {
                v6.style.borderColor = "red";
                flag6 = false;
            } else {
                v6.style.borderColor = "green";
                flag6 = true;
            }
        }

        flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

        return flag;
    }
    </script>

    <script>
    $(document).ready(function() {
        $("#mrp").keyup(function() {
            var price = parseInt($("#price").val());
            var mrp = parseInt($("#mrp").val());
            var total = (price * (mrp / 100));
            $("#discount").val(total);
        });
    });
    // 
    $(document).ready(function() {
        $("#mrp").keyup(function() {
            var price = parseInt($("#price").val());
            var mrp = parseInt($("#mrp").val());
            var total = price - (price * (mrp / 100));
            $("#TotalDiscount").val(total);
        });
    });
    </script>

</body>

<style>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;

    background-repeat: no-repeat;
    background-size: 100% 100%
}

label {
    text-align: left;
    font-weight: 700;
}

.card {
    padding: 30px 40px;
    margin-top: 60px;
    margin-bottom: 60px;
    border: none !important;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
}

.blue-text {
    color: #00BCD4
}

.form-control-label {
    margin-bottom: 0
}

input,
textarea,
button {
    padding: 8px 15px;
    border-radius: 5px !important;
    margin: 5px 0px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 18px !important;
    font-weight: 300
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #00BCD4;
    outline-width: 0;
    font-weight: 400
}

.btn-block {
    text-transform: uppercase;
    font-size: 15px !important;
    font-weight: 400;
    height: 43px;
    cursor: pointer
}

.btn-block:hover {
    color: #fff !important
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}
</style>

</html>