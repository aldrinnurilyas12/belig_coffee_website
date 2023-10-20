<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Entry Menu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../../adminbelig/assets/img/favicon.png" rel="icon">
    <link href="../../../adminbelig/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../../adminbelig/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../../adminbelig/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../../adminbelig/assets/css/style.css" rel="stylesheet">

    <link href="../../../yummy/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../yummy/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../yummy/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../../yummy/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../../yummy/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../../yummy/assets/css/main.css" rel="stylesheet">



</head>

<body>



    <main id="main" class="main">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Beri Review terhadap menu kami.</h5>



                <!-- Multi Columns Form -->
                <form role="form" method="post" action="<?php echo base_url() . 'mobile/review/sendreview' ?>"
                    enctype="multipart/form-data" class="row g-3">


                    <div class="col-md-5">
                        <label for="inputName5" class="form-label">No pembayaran</label>
                        <input type="text" name="pembayaran_id" placeholder="Masukan Id pembayaran anda..."
                            class="form-control" id="pembayaran_id" autocomplete="off" required>
                    </div>
                    <div class="col-md-5">
                        <label for="inputEmail5" class="form-label">Tanggal Pembayaran</label>
                        <input type="text" name="tanggal_pembayaran" class="form-control" autocomplete="off" readonly>
                    </div>
                    <div class="col-md-5">
                        <label for="inputEmail5" class="form-label">Nama Menu</label>
                        <input type="text" value="<?php echo $menu_nama; ?>" name="menu_nama" class="form-control"
                            autocomplete="off" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="inputPassword5" class="form-label">Rating</label>
                        <div class="rating">
                            <select style="height:40px;width:220px;font-weight:600;" name="rating">
                                <option>Rating</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="inputPassword5" class="form-label">Review Anda</label>
                        <textarea name="isi_review" class="form-control"></textarea>
                    </div>


                    <input type="text" value="<?php echo $this->session->userdata('kopel'); ?>" name="plg_id"
                        class="form-control" hidden autocomplete="off" readonly>

                    <div class="col-md-5">

                        <input hidden type="text" value="<?php echo $this->session->userdata('nama_pel'); ?>"
                            name="plg_nama" class="form-control" autocomplete="off" readonly>
                    </div>






                    <div class="col-md-1">

                        <input hidden type="text" value="<?php echo $menu_id; ?>" name="menu_id" class="form-control"
                            autocomplete="off" readonly>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kirim Review</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- End Multi Columns Form -->

            </div>
        </div>


    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#pembayaran_id').on('input', function() {

            var pembayaran_id = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('mobile/review/get_pembayaran') ?>",
                dataType: "JSON",
                data: {
                    pembayaran_id: pembayaran_id
                },
                cache: false,
                success: function(data) {
                    $.each(data, function(pembayaran_id, tanggal_pembayaran, total) {

                        $('[name="tanggal_pembayaran"]').val(data
                            .tanggal_pembayaran);
                        $('[name="total"]').val(data.total);


                    });

                }
            });
            return false;
        });

    });
    </script>

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