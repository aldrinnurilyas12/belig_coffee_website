<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Pemesanan Pelanggan</title>
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
                                        <th scope="col">No</th>
                                        <th scope="col">No Pemesanan</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Pelanggan</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status Order</th>
                                        <th class="text-right">Actions</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data->result_array() as $a) {




                                        $id = $a['pemesanan_id'];
                                        $tanggal = $a['tanggal_pemesanan'];
                                        $plg_id = $a['plg_id'];
                                        $plg_nama = $a['plg_nama'];
                                        $status = $a['status'];
                                        $total = $a['total'];

                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $tanggal; ?></td>
                                            <td><?php echo $plg_nama; ?></td>
                                            <td><?php echo number_format($total); ?></td>

                                            <td><?php echo $status; ?></td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $id; ?>">Status</button>
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

        <!-- Pesanan selesal -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h1 style="font-size: 20px;" class="card-title">Pemesanan Selesai</h1>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">No Pemesanan</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Pelanggan</th>
                                        <th scope="col">Total</th>

                                        <th scope="col">Status Order</th>
                                        <th scope="col">Aksi</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($orderselesai->result_array() as $a) {

                                        $id = $a['pemesanan_id'];
                                        $tanggal = $a['tanggal_pemesanan'];
                                        $plg_id = $a['plg_id'];
                                        $plg_nama = $a['plg_nama'];
                                        $status = $a['status'];
                                        $total = $a['total'];

                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $tanggal; ?></td>
                                            <td><?php echo $plg_nama; ?></td>
                                            <td><?php echo number_format($total); ?></td>

                                            <td><span style="color:green;font-weight:600;"><?php echo $status; ?></span>
                                            </td>
                                            <td>
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
        <!-- end -->










        <!-- ============ MODAL show pemesanan================ -->
        <?php
        foreach ($data->result_array() as $a) {
            $id = $a['pemesanan_id'];
            $tanggal = $a['tanggal_pemesanan'];
            $plg_id = $a['plg_id'];
            $plg_nama = $a['plg_nama'];
            $status = $a['status'];
            $notes = $a['notes'];
            $meja = $a['meja'];
            $total = $a['total'];

        ?>
            <div class="modal fade" id="basicModal<?php echo $id; ?>" tabindex="-1">
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


        <!-- ==============MODAL SHOW ORDER SELESAI -->
        <?php
        foreach ($orderselesai->result_array() as $a) {
            $id = $a['pemesanan_id'];
            $tanggal = $a['tanggal_pemesanan'];
            $plg_id = $a['plg_id'];
            $plg_nama = $a['plg_nama'];
            $status = $a['status'];
            $notes = $a['notes'];
            $meja = $a['meja'];
            $total = $a['total'];

        ?>
            <div class="modal fade" id="basicModal<?php echo $id; ?>" tabindex="-1">
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


        <!-- END -->


        <!-- ============ MODAL EDIT pemesanan================ -->
        <?php
        foreach ($data->result_array() as $a) {
            $id = $a['pemesanan_id'];
            $tanggal = $a['tanggal_pemesanan'];
            $plg_id = $a['plg_id'];
            $plg_nama = $a['plg_nama'];
            $status = $a['status'];
            $total = $a['total'];


        ?>

            <div class="modal fade" id="editModal<?php echo $id; ?>" tabindex="-1">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>




        <!-- ============ MODAL HAPUS pemesanan================ -->
        <?php
        foreach ($data->result_array() as $a) {
            $id = $a['pemesanan_id'];
            $tanggal = $a['tanggal_pemesanan'];
            $plg_id = $a['plg_id'];
            $plg_nama = $a['plg_nama'];
            $status = $a['status'];
            $total = $a['total'];

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