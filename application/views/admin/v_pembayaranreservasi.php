<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Pembayaran Booking Meja</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../adminbelig/assets/img/favicon.png" rel="icon">
    <link href="../../adminbelig/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link type="text/css" rel="stylesheet"
        href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.css' ?>" />

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
                            <h1 style="font-size: 20px;" class="card-title">Data Pembayaran Booking Meja Pelanggan</h1>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th>Foto</th>
                                        <th scope="col">No Booking</th>
                                        <th scope="col">Tgl Booking</th>
                                        <th scope="col">Pelanggan</th>

                                        <th scope="col">Bank</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Notes</th>
                                        <th scope="col">Tanggal Bayar</th>
                                        <th class="text-right">Actions</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($bookingdata->result_array() as $a) {



                                        $foto = $a['foto_bukti'];
                                        $id = $a['booking_id'];
                                        $plg_nama = $a['plg_nama'];
                                        $tgl_booking = $a['tanggal_booking'];
                                        $bank = $a['bank'];
                                        $total = $a['total'];
                                        $notes = $a['notes'];
                                        $tgl_bayar = $a['tanggal_pembayaran']

                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><img id="myImg" style="width: 90px;height:90px;"
                                                src="<?php echo base_url() . 'assets/buktibayar/' . $foto; ?>" alt="">
                                            <div id="myModal" class="modalgambar">

                                                <div class="content-modal">
                                                    <img class="modal-content" id="imgBayar">
                                                    <span class="close">&times;
                                                    </span>
                                                </div>

                                            </div>
                                        </td>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $tgl_booking; ?></td>
                                        <td><?php echo $plg_nama; ?></td>

                                        <td><?php echo $bank; ?></td>
                                        <td><?php echo $total; ?></td>
                                        <td><?php echo $notes; ?></td>
                                        <td><?php echo $tgl_bayar; ?></td>



                                        <td class=" text-right">
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editModal<?php echo $id; ?>">Konfirmasi</button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#basicModal<?php echo $id; ?>">Detail</button>




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

            <!--  -->

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h1 style="font-size: 20px;" class="card-title">Data Pembayaran Pemesanan Dine In</h1>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th>Foto</th>
                                        <th scope="col">No Pemesanan</th>
                                        <th scope="col">Pelanggan</th>
                                        <th scope="col">Tgl Pemesanan</th>
                                        <th scope="col">Bank</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Notes</th>
                                        <th scope="col">Tanggal Bayar</th>
                                        <th class="text-right">Actions</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($dineindata->result_array() as $a) {



                                        $foto = $a['foto_bukti'];
                                        $id = $a['pemesanan_id'];
                                        $plg_nama = $a['plg_nama'];
                                        $tanggalreservasi = $a['tanggal_pemesanan'];
                                        $bank = $a['bank'];
                                        $total = $a['total'];
                                        $notes = $a['notes'];
                                        $tgl_bayar = $a['tanggal_pembayaran']

                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><img id="myImg" style="width: 90px;height:90px;"
                                                src="<?php echo base_url() . 'assets/buktibayar/' . $foto; ?>" alt="">
                                            <div id="myModal" class="modalgambar">

                                                <div class="content-modal">
                                                    <img class="modal-content" id="imgBayar">
                                                    <span class="close">&times;
                                                    </span>
                                                </div>

                                            </div>
                                        </td>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $plg_nama; ?></td>
                                        <td><?php echo $tanggalreservasi; ?></td>
                                        <td><?php echo $bank; ?></td>
                                        <td><?php echo $total; ?></td>
                                        <td><?php echo $notes; ?></td>
                                        <td><?php echo $tgl_bayar; ?></td>



                                        <td class=" text-right">

                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#basicModal<?php echo $id; ?>">Detail</button>




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
        foreach ($pembayaran->result_array() as $a) {
            $id = $a['pemesanan_id'];

        ?>
        <div class="modal fade" id="basicModal<?php echo $id['pemesanan_id']; ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">#<?php echo $id; ?></h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" method="post"
                            action="<?php echo base_url() . 'admin/order/update_order' ?>"
                            enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="col-sm-12">

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
                                                    $query = $this->db->query("SELECT * FROM booking_detail WHERE detail_booking_id='pemesanan_id'");
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

        <!-- ============================================ EDIT STATUS -->
        <?php
        foreach ($bookingdata->result_array() as $a) {
            $id = $a['booking_id'];
            $tanggal = $a['tanggal_booking'];
            $plg_id = $a['plg_id'];
            $plg_nama = $a['plg_nama'];


        ?>
        <div class="modal fade" id="editModal<?php echo $id; ?>" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Konfirmasi Booking Meja</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" method="post"
                            action="<?php echo base_url() . 'admin/order/update_booking_status' ?>"
                            enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <table>
                                            <tr>
                                                <td style="width:120px;color:black">Tanggal</td>
                                                <td>:</td>
                                                <td style="color: black;"><?php echo $tanggal; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="color: black;">Pelanggan</td>
                                                <td>:</td>
                                                <td style="color: black;"><?php echo $plg_nama; ?></td>
                                            </tr>



                                        </table>

                                    </div>
                                    <div style="margin-top: 20px;" class="form-group">
                                        <label style="font-weight: bold;color:black;" for="regular13"
                                            class="col-sm-5 control-label">Konfirmasi Booking</label>
                                        <input type="hidden" name="booking_id" value="<?php echo $id; ?>">
                                        <input type="hidden" name="plg_id" value="<?php echo $plg_id; ?>">
                                        <input type="hidden" name="plg_nama" value="<?php echo $plg_nama; ?>">
                                        <div class="col-sm-8">
                                            <select name="status_bayar" class="form-control" id="regular13" required>
                                                <?php foreach ($statusbooking->result_array() as $st) {
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


                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <?php } ?>













    </main><!-- End #main -->




    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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

<style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    height: 400px;
    width: 400px;
}


#myImg:hover {
    opacity: 0.7;
}

/* The Modal (background) */
.modalgambar {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.9);
    /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
    margin: auto;
    display: block;
    width: 500px;
    height: 500px;
    max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content,
#caption {
    animation-name: zoom;
    animation-duration: 0.6s;
}

@keyframes zoom {
    from {
        transform: scale(0)
    }

    to {
        transform: scale(1)
    }
}

/* The Close Button */
.close {
    position: absolute;



    right: 10em;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px) {
    .modal-content {
        width: 100%;
    }
}
</style>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("imgBayar");

img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>

</html>