<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>Pembayaran</title>

    <link href="../../adminbelig/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="../../adminbelig/assets/css/style.css" rel="stylesheet">


    <link href="../../yummy/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../yummy/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../yummy/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../yummy/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../yummy/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../adminbelig/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="../../yummy/assets/css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
</head>

<body>
    <div style="justify-content:center;display:flex;margin-top:120px;" class="card-form-payment">
        <div style="width: 900px;" class="card">
            <div class="card-body">
                <h5 style="font-weight: bold;" class="card-title">Pembayaran Dine In </h5>
                <!-- Multi Columns Form -->
                <form role="form" method="post" action="<?php echo base_url() ?>mobile/pembayaran/send_paymentdinein"
                    enctype="multipart/form-data" class="row g-3">

                    <input readonly value="<?php echo $this->session->userdata('kopel'); ?>" style=" font-size: 16px;"
                        placeholder="‎" type="hidden" name="plg_id" required="">

                    <input style="font-size: 16px;" value="<?php echo $this->session->userdata('nama_pel'); ?>" hidden
                        type="text" name="plg_nama" readonly>
                    <div class="col-md-5">
                        <label for="inputName5" class="form-label">No Pemesanan</label>
                        <input type="text" name="pemesanan_id" placeholder="Masukan Id Pemesanan anda..."
                            class="form-control" id="pemesanan_id" autocomplete="off" required>
                    </div>
                    <div class="col-md-5">
                        <label for="inputEmail5" class="form-label">Tanggal Dine In</label>
                        <input type="text" name="tanggal_pemesanan" class="form-control" autocomplete="off" readonly>
                    </div>
                    <div class="col-md-3">
                        <label for="inputPassword5" class="form-label">Total Pemesanan</label>
                        <input type="text" name="total" class="form-control" id="mrp" autocomplete="off">
                    </div>
                    <div style="margin-right: 10px;" class="col-md-3">
                        <label for="inputPassword5" class="form-label">Pilih Bank</label>
                        <select style="height:40px;width:220px;font-weight:600;text-align:center;" name="bank">
                            <option>-- BANK --</option>
                            <option value="Mandiri">Bank Mandiri</option>
                            <option value="BNI">Bank BNI</option>
                            <option value="BRI">Bank BRI</option>
                            <option value="BCA">Bank BCA</option>

                        </select>
                    </div>

                    &nbsp;
                    &nbsp;
                    <div class="col-md-3">
                        <label for="inputPassword5" class="form-label">Catatan</label>
                        <textarea name="notes" class="form-control" id="inputAddres5s"></textarea>
                    </div>
                    <div style="display: flex;justify-content:space-evenly;" class="banner-bank">
                        <div class="col-md-3">
                            <label for="inputState" class="form-label">Upload Bukti Bayar</label>
                            <input name="filefoto" type="file">
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <section style="padding: 10px;" class="section">
        <div class="row">
            <div class="col-lg-12">

                <div style="width: 100%;" class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pembayaran Dine In</h5>

                        <!-- Table with stripped rows -->
                        <table style="width: 100%;" class="table table-striped table-bordered" id="myTable">
                            <thead>
                                <tr>

                                    <th scope="col">No</th>
                                    <th scope="col">Id Pay</th>
                                    <th scope="col">Bukti</th>
                                    <th scope="col">Nama </th>
                                    <th scope="col">Pemesanan Id </th>
                                    <th scope="col">Tanggal Dine In</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Bank</th>
                                    <th scope="col">Catatan</th>
                                    <th scope="col">Tanggal Bayar</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <?php
                                    $no = 1;
                                    ?>
                                    <?php foreach ($pembayarandinein->result_array() as $list) {
                                        $pay_id    = $list['pembayaran_id'];
                                        $plg_nama = $list['plg_nama'];
                                        $pesan_id = $list['pemesanan_id'];
                                        $tanggal_pemesanan = $list['tanggal_pemesanan'];
                                        $bank = $list['bank'];
                                        $total = $list['total'];
                                        $notes = $list['notes'];
                                        $tanggal_pembayaran = $list['tanggal_pembayaran'];
                                        $bank = $list['bank'];
                                        $foto_bukti = $list['foto_bukti']


                                    ?>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $pay_id; ?></td>
                                    <td><img style="width:80px;height:80px;" class="img-thumbnail width-1"
                                            src="<?php echo base_url() . 'assets/buktibayar/' . $foto_bukti; ?>"
                                            alt="" />
                                    </td>
                                    <td><?php echo $plg_nama; ?></td>
                                    <td><?php echo $pesan_id; ?></td>
                                    <td><?php echo $tanggal_pemesanan; ?></td>
                                    <td><?php echo $bank; ?></td>
                                    <td><?php echo $total; ?></td>
                                    <td><?php echo $notes; ?></td>
                                    <td><?php echo $tanggal_pembayaran; ?></td>

                                </tr>


                            </tbody>
                            <?php }; ?>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</body>



<style>
body {
    font-family: 'Rubik', sans-serif;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    width: 350px;
    display: flex;
    flex-direction: column;
}

.title {
    font-size: 24px;
    font-weight: 600;
    text-align: center;
}

.form {
    margin-top: 20px;
    display: flex;
    flex-direction: column;
}

.group {
    position: relative;
}

.form .group label {
    font-size: 14px;
    color: rgb(99, 102, 102);
    position: absolute;
    top: -10px;
    left: 10px;
    background-color: #fff;
    transition: all .3s ease;
}

.form .group input,
.form .group textarea {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
    outline: 0;
    width: 100%;
    background-color: transparent;
}

.form .group input:placeholder-shown+label,
.form .group textarea:placeholder-shown+label {
    top: 10px;
    background-color: transparent;
}

.form .group input:focus,
.form .group textarea:focus {
    border-color: #3366cc;
}

.form .group input:focus+label,
.form .group textarea:focus+label {
    top: -10px;
    left: 10px;
    background-color: #fff;
    color: #3366cc;
    font-weight: 600;
    font-size: 14px;
}

.form .group textarea {
    resize: none;
    height: 100px;
}

.form button {
    background-color: #3366cc;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.form button:hover {
    background-color: #27408b;
}
</style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="<?php echo base_url() ?>adminbelig/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?php echo base_url() ?>adminbelig/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>adminbelig/assets/vendor/chart.js/chart.umd.js"></script>
<script src="<?php echo base_url() ?>adminbelig/assets/vendor/echarts/echarts.min.js"></script>
<script src="<?php echo base_url() ?>adminbelig/assets/vendor/quill/quill.min.js"></script>
<script src="<?php echo base_url() ?>adminbelig/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?php echo base_url() ?>adminbelig/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url() ?>adminbelig/assets/vendor/php-email-form/validate.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable({
        responsive: true,
    });
});
</script>

<script>
$(document).ready(function() {
    $('#pemesanan_id').on('input', function() {

        var pemesanan_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('mobile/pembayaran/get_pemesanan') ?>",
            dataType: "JSON",
            data: {
                pemesanan_id: pemesanan_id
            },
            cache: false,
            success: function(data) {
                $.each(data, function(pemesanan_id, tanggal_pemesanan, total) {

                    $('[name="tanggal_pemesanan"]').val(data.tanggal_pemesanan);
                    $('[name="total"]').val(data.total);


                });

            }
        });
        return false;
    });

});
</script>

</html>