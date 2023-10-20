<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Profil</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() ?>../../adminbelig/assets/vendor/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">
    <link href="<?php echo base_url() ?>../../adminbelig/assets/vendor/bootstrap-icons/bootstrap-icons.css"
        rel="stylesheet">
    <link href="<?php echo base_url() ?>../../adminbelig/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>../../adminbelig/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>../../adminbelig/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>../../adminbelig/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>../../adminbelig/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="../../../yummy/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../yummy/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../yummy/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../../yummy/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../../yummy/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Template Main CSS File -->
    <link href="../../../yummy/assets/css/main.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>../../adminbelig/assets/css/style.css" rel="stylesheet">


</head>

<body>


    <main id="main" class="main">


        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="<?php echo base_url() . 'assets/images/' . $plg_photo; ?>" alt="Profile"
                                class="rounded-circle">
                            <h2><?php echo $plg_nama; ?></h2>


                            <?php
                            $tot_keluh = $keluhan->row_array();
                            $tot_testimoni = $testimonial->row_array();
                            $tot_pay = $pembayaran->row_array();
                            $order = $order->row_array();
                            ?>

                            <div style="display: block;" class="contentblock">
                                <div style="padding:5px;display: flex;justify-content:center;margin-top:20px;"
                                    class="items-flex">
                                    <div class="content">
                                        <label for="">Transaksi</label> <br>

                                        <p style="text-align: center;font-weight:bold;">
                                            <?php
                                            if (empty($order['total_order'])) {
                                                echo "0";
                                            } else {
                                                echo $order['total_order'];
                                            } ?>
                                        </p>

                                        <p></p>
                                    </div>



                                    <div style="margin-left:20px;" class="content">
                                        <label for="">Keluhan</label>
                                        <p style="text-align: center;font-weight:bold;">
                                            <?php
                                            if (empty($tot_keluh['total_keluhan'])) {
                                                echo "0";
                                            } else {
                                                echo $tot_keluh['total_keluhan'];
                                            } ?>


                                        </p>
                                    </div>


                                    <div style="margin-left:20px;" class="content">
                                        <label for="">Testimonial</label>
                                        <p style="text-align: center;font-weight:bold;">

                                            <?php
                                            if (empty($tot_testimoni['total_testi'])) {
                                                echo "0";
                                            } else {
                                                echo $tot_testimoni['total_testi'];
                                            } ?>

                                        </p>
                                    </div>


                                </div>


                                <div style="padding:5px;display: flex;justify-content:center;margin-top:10px;"
                                    class="items-flex">



                                    <div style="margin-left:20px;" class="content">
                                        <label for="">Review </label>
                                        <p style="text-align: center;font-weight:bold;">
                                            <?php
                                            if (empty($tot_keluh['total_keluhan'])) {
                                                echo "0";
                                            } else {
                                                echo $tot_keluh['total_keluhan'];
                                            } ?>


                                        </p>
                                    </div>


                                    <div style="margin-left:20px;" class="content">
                                        <label for="">Pembayaran</label>
                                        <p style="text-align: center;font-weight:bold;">

                                            <?php
                                            if (empty($tot_pay['total_payment'])) {
                                                echo "0";
                                            } else {
                                                echo $tot_pay['total_payment'];
                                            } ?>

                                        </p>
                                    </div>


                                </div>
                            </div>




                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div style="margin-bottom: 20px;" class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Profil anda</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Ubah
                                        Profil</button>
                                </li>




                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">


                                    <h5 class="card-title">Detail Profil</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Nama</div>
                                        <div style="font-weight:bold;" class="col-lg-9 col-md-8">
                                            <?php echo $plg_nama; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div style="font-weight:bold;" class="col-lg-9 col-md-8">
                                            <?php echo $plg_email; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Alamat</div>
                                        <div style="font-weight:bold;" class="col-lg-9 col-md-8">
                                            <?php echo $plg_alamat; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">No Handphone</div>
                                        <div style="font-weight:bold;" class="col-lg-9 col-md-8">
                                            <?php echo $plg_notelp; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Tanggal Daftar</div>
                                        <div style="font-weight:bold;" class="col-lg-9 col-md-8">
                                            <?php echo $plg_register; ?></div>
                                    </div>





                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form action="<?php echo base_url(); ?>mobile/member/update_profile/" method="post"
                                        enctype="multipart/form-data" class="row g-3" novalidate>
                                        <div class="row mb-3">
                                            <!-- <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                                Image</label> -->
                                            <div class="col-md-8 col-lg-9">
                                                <!-- <img src="<?php echo base_url() . 'assets/images/' . $plg_photo; ?>"
                                                    alt="Profile"> -->
                                                <!-- <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm"
                                                        title="Upload new profile image"><i
                                                            class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"
                                                        title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                </div> -->
                                            </div>
                                        </div>

                                        <div class="roq-md-3">

                                            <input type="text" name="plg_id" value="<?php echo $plg_id ?>"
                                                class="form-control" hidden id="inputName5" autocomplete="off" readonly>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="plg_nama" type="text" class="form-control"
                                                    value="<?php echo $plg_nama; ?>">
                                            </div>
                                        </div>



                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="plg_email" type="text" class="form-control"
                                                    value="<?php echo $plg_email; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="plg_alamat" type="text" class="form-control"
                                                    value="<?php echo $plg_alamat; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Country" class="col-md-4 col-lg-3 col-form-label">No
                                                Handphone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="plg_notelp" type="text" class="form-control"
                                                    value="<?php echo $plg_notelp; ?>">
                                            </div>
                                        </div>






                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-settings">

                                    <!-- Settings Form -->
                                    <form>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email
                                                Notifications</label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="changesMade"
                                                        checked>
                                                    <label class="form-check-label" for="changesMade">
                                                        Changes made to your account
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="newProducts"
                                                        checked>
                                                    <label class="form-check-label" for="newProducts">
                                                        Information on new products and services
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="proOffers">
                                                    <label class="form-check-label" for="proOffers">
                                                        Marketing and promo offers
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="securityNotify"
                                                        checked disabled>
                                                    <label class="form-check-label" for="securityNotify">
                                                        Security alerts
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form><!-- End settings Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form>

                                        <div class="row mb-3">
                                            <label for="currentPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="currentPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                    id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter
                                                New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                    id="renewPassword">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>




        </section>

    </main><!-- End #main -->





    <!-- Vendor JS Files -->
    <script src="<?php echo base_url() ?>../../adminbelig/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url() ?>../../adminbelig/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>../../adminbelig/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?php echo base_url() ?>../../adminbelig/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?php echo base_url() ?>../../adminbelig/assets/vendor/quill/quill.min.js"></script>
    <script src="<?php echo base_url() ?>../../adminbelig/assets/vendor/simple-datatables/simple-datatables.js">
    </script>
    <script src="<?php echo base_url() ?>../../adminbelig/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url() ?>../../adminbelig/assets/vendor/php-email-form/validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>../../adminbelig/assets/js/main.js"></script>

</body>

</html>