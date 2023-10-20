<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Penjualan Menu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../adminbelig/assets/img/favicon.png" rel="icon">
    <link href="../../adminbelig/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
                            <h1 style="font-size: 20px;" class="card-title">Laporan Penjualan Menu</h1>

                            <div style="display:flex;" class="buttoncetak">
                                <div style="margin-left: 10px;width:500px;">

                                    <form method="POST" action="" class="form-inline">

                                        <select style="width: 100px;" class="form-control mr-2" name="bulan">
                                            <option value=""> Bulan</option>
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>

                                        <select style="width: 80px;" class="form-control mr-2" name="tahun" ; <?php
                                                                                                                $mulai = date('Y') - 5;
                                                                                                                for ($i = $mulai; $i < $mulai + 10; $i++) {
                                                                                                                    $sel = $i == date('Y') ? ' selected="selected"' : '';
                                                                                                                    echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                                                                                                }
                                                                                                                ?> </select>
                                            <button type=" submit" name="submit" class="btn btn btn-success">Tampilkan</button>
                                            &nbsp;
                                            <button type="button" id="exportPdf" name="cetak" class="btn btn-primary btn-cetak">Cetak</button>
                                    </form>
                                </div>
                            </div>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>

                                        <th scope="col">No</th>
                                        <th scope="col">Nama Menu</th>
                                        <th scope="col">Harga Menu</th>
                                        <th scope="col">Total Terjual</th>
                                        <th scope="col">Pendapatan</th>



                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    //jika tanggal dari dan tanggal ke ada maka
                                    if (isset($_POST['submit'])) {
                                        $bln = date($_POST['bulan']);
                                        $tahun = date($_POST['tahun']);

                                        $data = $this->db->query("SELECT detail_menu_nama, SUM(detail_porsi) as total_terjual, detail_harjul, sum(detail_harjul * detail_porsi) as pendapatan, tbl_invoice.inv_tanggal
                                                FROM tbl_detail
                                                LEFT JOIN tbl_invoice
                                                ON tbl_detail.detail_pemesanan_id = tbl_invoice.inv_no
                                                WHERE month(tbl_invoice.inv_tanggal)='$bln'and year(tbl_invoice.inv_tanggal) = '$tahun'
                                                GROUP BY tbl_detail.detail_menu_nama, detail_harjul, tbl_invoice.inv_tanggal;");
                                    } else {
                                        $data = $this->db->query("SELECT detail_menu_nama, SUM(detail_porsi) as total_terjual, detail_harjul, sum(detail_harjul * detail_porsi) as pendapatan
                                        FROM tbl_detail
                                        LEFT JOIN tbl_invoice
                                        ON tbl_detail.detail_pemesanan_id = tbl_invoice.inv_no
                                        WHERE tbl_invoice.inv_status = 'Pesanan selesai'
                                        GROUP BY tbl_detail.detail_menu_nama, detail_harjul;");
                                    }

                                    ?>



                                    <?php
                                    $no = 1;
                                    foreach ($sales_menu->result_array() as $a) {


                                        $nama_menu = $a['detail_menu_nama'];
                                        $terjual = $a['total_terjual'];
                                        $harjul = $a['detail_harjul'];
                                        $pendapatan = $a['pendapatan'];




                                    ?>
                                        <tr>

                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $nama_menu; ?></td>
                                            <td>Rp <?php echo number_format($harjul); ?></td>
                                            <td><?php echo $terjual; ?></td>
                                            <td>Rp <?php echo number_format($pendapatan); ?></td>



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
    <script>
        $(document).ready(function() {
            $('form').on('submit', function(e) {
                e.preventDefault(); // Mencegah form untuk melakukan submit

                var bulan = $('[name="bulan"]').val(); // Mendapatkan nilai tanggal awal
                var tahun = $('[name="tahun"]').val(); // Mendapatkan nilai tanggal awal

                // Mengirim permintaan AJAX ke server untuk mengambil data berdasarkan filter tanggal
                $.ajax({
                    url: 'lihat2', // Ganti dengan URL yang sesuai
                    type: 'POST',
                    data: {
                        bulan: bulan,
                        tahun: tahun,
                    },
                    success: function(response) {
                        // Menghapus semua baris pada tabel sebelum mengisi dengan data baru
                        $('.datatable tbody').empty();

                        var penjualanMenuData = JSON.parse(response);
                        var no = 1
                        $.each(penjualanMenuData, function(index, data) {
                            var row = '<tr>' +
                                '<td>' + no + '</td>' +
                                '<td>' + data.detail_menu_nama + '</td>' +
                                '<td>' + data.detail_harjul + '</td>' +
                                '<td>' + data.total_terjual + '</td>' +
                                '<td>' + data.pendapatan + '</td>' +
                                '</tr>';
                            $('.datatable tbody').append(row);
                            no++;
                        });
                    },
                    error: function() {
                        alert('Terjadi kesalahan dalam memuat data.');
                    }
                });
            });
            $('#exportPdf').on('click', function() {
                var bulan = $('[name="bulan"]').val(); // Mendapatkan nilai tanggal awal
                var tahun = $('[name="tahun"]').val(); // Mendapatkan nilai tanggal akhir

                if (bulan && tahun) {
                    // Mengirim permintaan AJAX ke script cetak_pdf.php untuk menghasilkan file PDF
                    $.ajax({
                        url: 'cetak_pdf2', // Ganti dengan URL yang sesuai
                        type: 'POST',
                        data: {
                            bulan: bulan,
                            tahun: tahun
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