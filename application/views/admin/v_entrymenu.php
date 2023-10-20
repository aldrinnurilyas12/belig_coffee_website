<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Entry Menu</title>


    <!-- Favicons -->
    <link href="../adminbelig/assets/img/favicon.png" rel="icon">
    <link href="../adminbelig/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Entry Data Menu dan Promo </h5>



                <!-- Multi Columns Form -->
                <form role="form" method="post" action="<?php echo base_url() . 'admin/menu/simpan_menu' ?>"
                    enctype="multipart/form-data" class="row g-3">
                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Nama Menu atau Promo</label>
                        <input type="text" name="nama" placeholder="Masukan menu dan promo" class="form-control"
                            id="inputName5" autocomplete="off">
                    </div>
                    <div class="col-md-5">
                        <label for="inputEmail5" class="form-label">Harga</label>
                        <input type="text" placeholder="Masukan harga menu" name="menu_harga_baru" class="form-control"
                            id="price" autocomplete="off" required>
                    </div>
                    <div class="col-md-3">
                        <label for="inputPassword5" class="form-label">Diskon (%)</label>
                        <input type="text" name="diskon" class="form-control" placeholder="masukan diskon" id="mrp"
                            autocomplete="off">
                    </div>
                    <div class="col-md-3">
                        <label for="inputPassword5" class="form-label">Harga Diskon</label>
                        <input type="text" name="harga_diskon" class="form-control" id="discount">
                    </div>
                    <div class="col-md-5">
                        <label for="inputPassword5" class="form-label">Total Harga</label>
                        <input type="text" name="harga_menu" class="form-control" id="TotalHarga">
                    </div>
                    <div class="col-md-3">
                        <label for="inputAddress5" class="form-label">Deskripsi Menu</label>
                        <textarea name="deskripsi" class="form-control" id="inputAddres5s"></textarea>
                    </div>

                    <div class="col-md-3">
                        <label for="inputState" class="form-label">Kategori</label>
                        <select name="kategori" id="inputState" class="form-select" required>
                            <option value="">Kategori</option>
                            <?php
                            foreach ($kat->result_array() as $k) {
                                $k_id = $k['kategori_id'];
                                $k_nama = $k['kategori_nama'];

                            ?>
                            <option value="<?php echo $k_id; ?>"><?php echo $k_nama; ?></option>
                            <?php } ?>
                        </select>
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

                    <div class="col-md-5">
                        <div class="col-md-5">
                            <label class="form-label">Periode Promo</label>
                            <div style="display:flex;" class="periode">
                                <div class="periode-promo">
                                    <label style="font-weight:500;" for="">Tanggal Awal</label>
                                    <input value="" type="date" name="tgl_awal_promo" class="form-control"
                                        autocomplete="off">
                                </div>

                                <div class="periode-promo">
                                    <label style="font-weight:500;" for="">Tanggal Akhir</label>
                                    <input value="" style="margin-left:10px;" type="date" name="tgl_akhir_promo"
                                        class="form-control" autocomplete="off">
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-5">
                        <label for="inputEmail5" class="form-label">Upload foto</label>

                        <div class="col-sm-8">
                            <input type="file" name="filefoto" id="regular13" required>
                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



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
            $("#TotalHarga").val(total);
        });
    });
    </script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
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