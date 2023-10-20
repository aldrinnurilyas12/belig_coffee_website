<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cetak laporan</title>
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



    <!-- cetak laporan js and css -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- end -->


    <!-- Template Main CSS File -->
    <link href="../../adminbelig/assets/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body>

    <?php $pendapatan =  $this->db->query("SELECT sum(inv_total) as pendapatan  FROM tbl_invoice
                                    WHERE inv_status='Pesanan selesai'");

    ?>


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
                            <h1 style="font-size: 20px;" class="card-title">Cetak Laporan Pemesanan</h1>
                            <form action="" method="POST">

                                <div style="display: flex;" class="row p-4">
                                    <div class="col-2 col-md-2 col-lg-2">
                                        <p>Tanggal Awal</p>
                                        <input style="height: 30px;" class=" logstyle w-100" type="date" name="tgl_1">
                                    </div>

                                    <div class="col-2 col-md-2 col-lg-2">
                                        <p>Tanggal Akhir</p>
                                        <input style="height: 30px;" class="logstyle w-100" type="date" name="tgl_2">
                                    </div>


                                    <div style="width: max-content;margin-top:15px;" class="col-2 col-md-2 col-lg-2">
                                        <button style="margin-top: 13px;" type="submit" name="lihat" class=" btn btn-warning">Cari</button>
                                    </div>

                                    <div style="width: max-content;margin-top:25px;" class="col-2 col-md-2 col-lg-2">
                                        <button type="button" id="exportPdf" name="cetak" class="btn btn-primary w-100 btn-cetak">Cetak</button>
                                    </div>
                                </div>
                            </form>

                            <div class="table-responsive" style="margin-top: 10px;">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">No Invoice</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Pelanggan</th>
                                            <th scope="col">Jumlah Menu</th>
                                            <th scope="col">Total Porsi</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Status Order</th>



                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php

                                        if (empty($tot_sales)) {
                                            echo "<td>" . "kosong" . "</td>";
                                        } else {

                                            $no = 1;
                                            foreach ($tot_sales->result_array() as $a) {
                                                $tgl = date('d-m-Y', strtotime($a['inv_tanggal']));
                                                echo "<tr>";
                                                echo "<td>" . $no++ . "</td>";
                                                echo "<td>" . $a['inv_no'] . "</td>";
                                                echo "<td>" . $a['inv_tanggal'] . "</td>";
                                                echo "<td>" . $a['inv_plg_nama'] . "</td>";
                                                echo "<td>" . $a['total_menu'] . "</td>";
                                                echo "<td>" . $a['total_porsi'] . "</td>";
                                                echo "<td>" . number_format($a['total']) . "</td>";
                                                echo "<td>" .  $a['inv_status'] . "</td>";


                                                echo "</tr>";
                                            }

                                        ?>


                                        <?php } ?>


                                        <?php
                                        foreach ($tot_pendapatan->result_array() as $tot) {

                                        ?>

                                    <tfoot>

                                        <tr>
                                            <td style="text-align: center;font-weight:bold;" colspan="5">Total
                                                Pendapatan
                                            </td>

                                            <td style="text-align: right;font-weight:bold;">
                                                <p id="tot_pendapatan">Rp <?php echo number_format($tot['pendapatan']) ?></p>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                    </tfoot>
                                    </tbody>

                                </table>
                            </div>
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

                var tgl1 = $('[name="tgl_1"]').val(); // Mendapatkan nilai tanggal awal
                var tgl2 = $('[name="tgl_2"]').val(); // Mendapatkan nilai tanggal akhir

                // Mengirim permintaan AJAX ke server untuk mengambil data berdasarkan filter tanggal
                $.ajax({
                    url: 'laporanpenjualan/lihat', // Ganti dengan URL yang sesuai
                    type: 'POST',
                    data: {
                        tgl_1: tgl1,
                        tgl_2: tgl2
                    },
                    success: function(response) {
                        // Menghapus semua baris pada tabel sebelum mengisi dengan data baru
                        $('.datatable tbody').empty();
                        var totSales = JSON.parse(response); // Mengambil data tot_sales dari respons JSON
                        // Lakukan apa pun yang perlu Anda lakukan dengan data tot_sales di sini

                        var tot_salesData = totSales[0];
                        var tot_PendapatanData = totSales[1][0];
                        var no = 1;
                        $.each(tot_salesData, function(index, data) {

                            var row = '<tr>' +

                                '<td>' + no + '</td>' +
                                '<td>' + data.inv_no + '</td>' +
                                '<td>' + data.inv_tanggal + '</td>' +
                                '<td>' + data.inv_plg_nama + '</td>' +
                                '<td>' + data.total_menu + '</td>' +
                                '<td>' + data.total_porsi + '</td>' +
                                '<td>' + data.total + '</td>' +
                                '<td>' + data.inv_status + '</td>' +
                                '</tr>';
                            $('.datatable tbody').append(row);
                            no++
                        });
                        $('#tot_pendapatan').text('Rp.' + tot_PendapatanData.pendapatan)
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
                        url: 'laporanpenjualan/cetak_pdf', // Ganti dengan URL yang sesuai
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