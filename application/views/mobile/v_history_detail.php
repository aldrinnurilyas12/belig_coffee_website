<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Riwayat Pemesanan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../../adminbelig/assets/img/favicon.png" rel="icon">
    <link href="../../../adminbelig/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../../adminbelig/assets/css/style.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Template Main CSS File -->


    <link href="../../../yummy/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background:white;">



    <section style="display: flex;justify-content:center;" class="container">


        <section style="justify-content: center;display:block;background:none;" class="section">
            <h4 style="text-align:center;margin-bottom:20px;font-weight:bold;">Order setail History</h4>
            <div class="col-lg-12">


                <?php foreach ($data as $row) :


                ?>

                    <div style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;background:white;border-radius:12px;width:450px;" class="card">
                        <div class="card-body" style="padding: 20px;">
                            <div style="display: flex;justify-content:space-between;" class="flex-detail">
                                <h5 style="font-family: 'Rubik', sans-serif;color:black;" class="card-title">
                                    <?php echo $row->detail_menu_id; ?>
                                </h5>


                            </div>
                            <p><?php echo $detail_porsi; ?> Porsi</p>
                            <div style="display: flex;justify-content:space-between;" class="flex-center">
                                <h6>#<?php echo $detail_pemesanan_id; ?></h6>

                            </div>



                            <div style="display: flex;justify-content:flex-end;" class="content-detail">



                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>


            </div>



        </section>




    </section>




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
    <style>
        body {
            font-family: Rubik, 'sans-serif';
        }
    </style>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</html>