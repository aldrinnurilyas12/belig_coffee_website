<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>Kirim Testimonial</title>
    <link href="../../adminbelig/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../adminbelig/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../adminbelig/assets/css/style.css" rel="stylesheet">
    <link href="../../yummy/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../yummy/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../yummy/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../yummy/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../yummy/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="../../yummy/assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
</head>

<body>

    <div style="justify-content:center;display:flex;margin-top:120px;" class="card-form-payment">
        <div style="width: 900px;" class="card">
            <div class="card-body">
                <h5 style="font-weight: bold;" class="card-title">Entry Testimonial Pelanggan </h5>
                <p style="font-size: 12px;color:gray;">Anda bisa masukan id pembayaran untuk melakukan
                    entry testimonial</p>
                <!-- Multi Columns Form -->
                <form class="row g-3" action="<?php echo base_url() ?>mobile/testimonial/send_testimonial"
                    method="post">

                    <input readonly value="<?php echo $this->session->userdata('kopel'); ?>" style=" font-size: 16px;"
                        placeholder="‎" type="hidden" name="plg_id" required="">

                    <input style="font-size: 16px;" value="<?php echo $this->session->userdata('nama_pel'); ?>" hidden
                        type="text" name="plg_nama" readonly>


                    <div class="col-md-5">
                        <label for="inputName5" class="form-label">Id Pembayaran</label>
                        <input type="text" name="pembayaran_id" placeholder="Masukan id pembayaran" class="form-control"
                            id="pembayaran_id" autocomplete="off">
                    </div>
                    <div class="col-md-5">
                        <label for="inputEmail5" class="form-label">Tanggal pembayaran</label>
                        <input type="text" name="tanggal_pembayaran" class="form-control" autocomplete="off" readonly>
                    </div>
                    <div style="margin-right: 10px;" class="col-md-3">
                        <label for="inputEmail5" class="form-label">Berikan Rating</label>
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

                    &nbsp;
                    &nbsp;
                    <div class="col-md-3">
                        <label for="inputPassword5" class="form-label">Sampaikan testimonial</label>
                        <textarea style="font-size: 16px;width:300px;" placeholder="Sampaikan testimonial anda..."
                            name="isi_testimonial" rows="5"></textarea>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kirim Testimonial</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </form><!-- End Multi Columns Form -->

            </div>
        </div>
    </div>

    </div>
    </div>

    <section style="padding: 20px;" class="section">

        <div class="row">
            <div class="col-lg-12">

                <div style="width: 100%;" class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Testimonial</h5>

                        <!-- Table with stripped rows -->
                        <table style="width: 100%;" class="table table-striped table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">ID</th>

                                    <th scope="col">Nama </th>

                                    <th scope="col">Pembayaran Id </th>
                                    <th scope="col">Tgl Pembayaran</th>

                                    <th scope="col">Rating</th>
                                    <th scope="col">Testimonial</th>
                                    <th scope="col">Balasan</th>
                                    <th scope="col">Tanggal</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            ?>
                            <?php foreach ($datatesti as $row) :
                            ?>

                            <tbody>
                                <tr>

                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row->id_testimonial; ?></td>
                                    <td><?php echo $row->plg_nama; ?></td>

                                    <td><?php echo $row->pembayaran_id; ?></td>

                                    <td><?php echo $row->tanggal_pembayaran; ?></td>
                                    <td><?php echo $row->rating; ?></td>
                                    <td style="width: 300px;"><?php echo $row->isi_testimonial; ?></td>
                                    <td><?php echo $row->balasan; ?></td>
                                    <td><?php echo $row->tgl_testimonial; ?></td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

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
    $('#pembayaran_id').on('input', function() {

        var pembayaran_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('mobile/testimonial/get_pembayaran') ?>",
            dataType: "JSON",
            data: {
                pembayaran_id: pembayaran_id
            },
            cache: false,
            success: function(data) {
                $.each(data, function(pembayaran_id, tanggal_pembayaran) {

                    $('[name="tanggal_pembayaran"]').val(data.tanggal_pembayaran);



                });

            }
        });
        return false;
    });

});
</script>

</html>