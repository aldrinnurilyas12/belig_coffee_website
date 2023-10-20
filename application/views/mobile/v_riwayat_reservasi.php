<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Riwayat booking</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../adminbelig/assets/img/favicon.png" rel="icon">
    <link href="../adminbelig/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link href="../../adminbelig/assets/css/style.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Template Main CSS File -->


    <link href="../../yummy/assets/css/main.css" rel="stylesheet">


</head>

<body style="background:white;">



    <section style="display: flex;justify-content:center;" class="container">


        <section style="justify-content: center;display:block;background:none;" class="section">

            <h4 style="margin-bottom:20px;font-weight:bold;text-align:center;">Riwayat booking Anda</h4>


            <div class="col-lg-12">
                <?php foreach ($data->result_array() as $row) {

                    $id_booking = $row['booking_id'];
                    $tglbooking = $row['tanggal_booking'];
                    $namaplg    = $row['plg_nama'];
                    $status     = $row['status_bayar'];
                    $total     = $row['total'];
                    $tglbayar = $row['tanggal_bayar'];
                ?>

                    <div style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;background:white;border-radius:12px;width:450px;" class="card">
                        <div class="card-body" style="padding: 20px;">
                            <div style="display: flex;justify-content:space-between;" class="flex-detail">
                                <h5 style="font-family: 'Rubik', sans-serif;color:black;" class="card-title">
                                    <?php echo $namaplg; ?>
                                </h5>
                                <p style="font-family: 'Rubik', sans-serif;color:steelblue;font-size:14px;font-weight:500;" class="card-title">
                                    <?php echo $id_booking; ?> </p>


                            </div>

                            <p>Status : <?php echo $status ?></p>

                            <p>Total belanja : Rp <?php echo number_format($total); ?></p>
                            <div style="display: block;justify-content:space-between;" class="flex-center">

                                <p style="font-family: 'Rubik', sans-serif;font-size:14px;font-weight:500;"> Tanggal Booking
                                    :
                                    <?php echo $tglbooking; ?> </p>

                                <p style="font-family: 'Rubik', sans-serif;font-size:14px;font-weight:500;">Tanggal Bayar
                                    : <?php echo $tglbayar; ?></p>




                            </div>




                            <div style="display: flex;justify-content:space-between;" class="content-detail">

                                <a style="width:70px;font-size:14px;color: black;background:blue;border-radius:4px;color:white;height:30px;padding:5px;text-align:center;" href="<?php echo base_url() ?>mobile/pembayaran/pembayaranreservasi">Bayar</a>
                                <a style="font-size:14px;color: black;background:white;border:1.5px solid green;border-radius:4px;color:green;height:30px;padding:5px;" data-target="#modal_detail<?php echo $id_booking; ?>" data-toggle="modal" href="#">Lihat
                                    Rincian</a>


                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>



        </section>


        <?php foreach ($data->result_array() as $row) {

            $id_booking = $row['booking_id'];
            $tglbooking = $row['tanggal_booking'];
            $namaplg    = $row['plg_nama'];
            $status     = $row['status_bayar'];
            $notes    = $row['notes'];
            $meja = $row['no_meja'];


        ?>

            <div class="modal fade" id="modal_detail<?php echo $id_booking; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="modal-title" id="myModalLabel">#<?php echo $id_booking; ?></h3>
                        </div>
                        <form class="form-horizontal" role="form" method="post" action="#" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <table>
                                            <tr>
                                                <td style="width:120px;">Tanggal booking</td>
                                                <td>:</td>
                                                <td><?php echo $tglbooking; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pelanggan</td>
                                                <td>:</td>
                                                <td><?php echo $namaplg; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
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
                                                $result = $this->db->query("SELECT booking_detail.detail_menu_nama, 
                                                booking_detail.detail_harjul,
                                                booking_detail.detail_porsi, booking_detail.detail_subtotal
                                                 FROM booking_detail
                                                 LEFT JOIN booking
                                                 ON booking_detail.detail_booking_id = booking.booking_id
                                                  WHERE booking_id='$id_booking'");


                                                foreach ($result->result_array() as $j) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $j['detail_menu_nama']; ?></td>
                                                        <td style="text-align:center;">Rp
                                                            <?php echo number_format($j['detail_harjul']); ?>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <?php echo $j['detail_porsi']; ?>
                                                        </td>
                                                        <td style="text-align:center;"> Rp
                                                            <?php echo $j['detail_subtotal']; ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>


                                            <tfoot>
                                                <tr>
                                                    <td colspan="3">Total</td>
                                                    <td style="text-align:center; font-weight:800;">Rp
                                                        <?php echo number_format($total); ?>
                                                    </td>
                                                </tr>
                                            </tfoot>

                                        </table>
                                    </div>
                                </div>


                            </div>
                            <div class="modal-footer">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>



    </section>




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