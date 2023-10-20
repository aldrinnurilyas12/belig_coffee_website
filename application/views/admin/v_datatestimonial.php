<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Testimonial Pelanggan</title>
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

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
                            <h1 style="font-size: 20px;" class="card-title">Testimonial Pelanggan</h1>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>

                                        <th scope="col">No</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">Pembayaran Id </th>
                                        <th scope="col">Tgl Pembayaran </th>
                                        <th scope="col">Rating</th>
                                        <th scope="col">Testimonial</th>
                                        <th scope="col">Balasan</th>
                                        <th scope="col">Tanggal </th>
                                        <th scope="col">Aksi </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data->result_array() as $i) {

                                        $id_testimonial = $i['id_testimonial'];
                                        $nama = $i['plg_nama'];
                                        $bayar_id = $i['pembayaran_id'];
                                        $tgl_bayar = $i['tanggal_pembayaran'];

                                        $rating = $i['rating'];
                                        $isi_testimonial = $i['isi_testimonial'];
                                        $balasan = $i['balasan'];
                                        $tgl = $i['tgl_testimonial'];



                                    ?>
                                        <tr>

                                            <td><?php echo $no++; ?></td>
                                            <td style="width: 200px;"><?php echo $nama; ?></td>
                                            <td style="width: 200px;"><?php echo $bayar_id; ?></td>
                                            <td style="width: 200px;"><?php echo $tgl_bayar; ?></td>
                                            <td style="text-align: center;"><?php echo $rating; ?></td>
                                            <td style="width: 300px;"><?php echo $isi_testimonial; ?></td>
                                            <td><?php echo $balasan; ?></td>
                                            <td><?php echo $tgl; ?></td>
                                            <td> <a href="<?= site_url('../../admin/replytestimonial/balasan/' . $id_testimonial);  ?>" class="btn btn-primary">Balas</a></td>

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