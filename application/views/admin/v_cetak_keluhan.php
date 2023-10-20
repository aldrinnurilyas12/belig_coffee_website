<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cetak Laporann Keluhan Pelanggan</title>
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
    <link href="../../adminbelig/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../adminbelig/assets/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
                            <h1 style="font-size: 20px;" class="card-title">Laporan Keluhan Pelanggan</h1>
                            <form action="" method="POST">
                                <!-- a -->

                                <div style="display: flex;" class="row p-4">
                                    <div class="col-2 col-md-2 col-lg-2">
                                        <p>Tanggal Awal</p>
                                        <input style="height: 30px;" class=" logstyle w-100" type="date" name="tgl_1">
                                    </div>

                                    <div class="col-2 col-md-2 col-lg-2">
                                        <p>Tanggal Akhir</p>
                                        <input style="height: 30px;" class="logstyle w-100" type="date" name="tgl_2">
                                    </div>


                                    <div style="width: max-content;margin-top:25px;" class="col-2 col-md-2 col-lg-2">
                                        <button style="margin-top: 13px;" type="submit" name="lihat"
                                            class=" btn btn-warning">Cari</button>
                                    </div>

                                    <div style="width: max-content;margin-top:25px;" class="col-2 col-md-2 col-lg-2">
                                        <button style="margin-top: 13px;" type="button" id="exportPdf" name="cetak"
                                            class="btn btn-primary w-100 btn-cetak">Cetak</button>
                                    </div>
                                </div>

                                <!-- e -->

                            </form>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Telpon</th>
                                        <th scope="col">kategori</th>
                                        <th scope="col">Keluhan</th>
                                        <th scope="col">Tanggapan</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Tanggal Kedatangan </th>
                                        <th scope="col"> Tanggal Keluhan</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($keluhan->result_array() as $a) {

                                        $plg_nama = $a['plg_nama'];
                                        $telepon = $a['telepon'];
                                        $kategori = $a['kategori'];
                                        $keluhan = $a['keluhan'];
                                        $tanggapan = $a['tanggapan'];
                                        $kel_status = $a['kel_status'];
                                        $tanggal_kedatangan = $a['tanggal_kedatangan'];
                                        $tanggal_keluhan = $a['tanggal_keluhan'];


                                    ?>
                                    <tr>


                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $plg_nama; ?></td>
                                        <td><?php echo $telepon; ?></td>
                                        <td><?php echo $kategori; ?></td>
                                        <td style="width: 300px;"><?php echo $keluhan; ?></td>
                                        <td><?php echo $tanggapan; ?></td>
                                        <td><?php echo $kel_status; ?></td>
                                        <td><?php echo $tanggal_kedatangan; ?></td>
                                        <td><?php echo $tanggal_keluhan; ?></td>


                                    </tr>
                                    <?php $no++ ?>
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
    <script src="../../adminbelig/assets/js/main.js"></script>\
    <script>
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault(); // Mencegah form untuk melakukan submit

            var tgl1 = $('[name="tgl_1"]').val(); // Mendapatkan nilai tanggal awal
            var tgl2 = $('[name="tgl_2"]').val(); // Mendapatkan nilai tanggal akhir

            // Mengirim permintaan AJAX ke server untuk mengambil data berdasarkan filter tanggal
            $.ajax({
                url: 'lihat', // Ganti dengan URL yang sesuai
                type: 'POST',
                data: {
                    tgl_1: tgl1,
                    tgl_2: tgl2
                },
                success: function(response) {
                    // Menghapus semua baris pada tabel sebelum mengisi dengan data baru
                    $('.datatable tbody').empty();

                    var testimonialData = JSON.parse(response);
                    $.each(testimonialData, function(index, data) {
                        var balasan = data.balasan !== '' ? data.balasan : '-';

                        var row = '<tr>' +

                            '<td>' + data.plg_nama + '</td>' +
                            '<td>' + data.kategori + '</td>' +
                            '<td>' + data.keluhan + '</td>' +
                            '<td>' + data.tanggapan + '</td>' +
                            '<td>' + data.kel_status + '</td>' +
                            '<td>' + data.tanggal_kedatangan + '</td>' +
                            '<td>' + data.tanggal_keluhan + '</td>' +
                            '</tr>';
                        $('.datatable tbody').append(row);
                    });
                },
                error: function() {
                    alert('Terjadi kesalahan dalam memuat data.');
                }
            });
        });
        $('#exportPdf').on('click', function() {
            var tgl1 = $('[name="tgl_1"]').val(); // Mendapatkan nilai tanggal awal
            var tgl2 = $('[name="tgl_2"]').val(); // Mendapatkan nilai tanggal akhir

            if (tgl1 && tgl2) {
                // Mengirim permintaan AJAX ke script cetak_pdf.php untuk menghasilkan file PDF
                $.ajax({
                    url: 'cetak_pdf', // Ganti dengan URL yang sesuai
                    type: 'POST',
                    data: {
                        tgl_1: tgl1,
                        tgl_2: tgl2
                    },
                    success: function(response) {
                        // Tidak perlu melakukan apa-apa karena file PDF akan langsung diunduh oleh browser
                    },
                    error: function() {

                    }
                });
            } else {
                alert('Harap pilih rentang tanggal terlebih dahulu.');
            }
        });
    });
    </script>

</body>

</html>