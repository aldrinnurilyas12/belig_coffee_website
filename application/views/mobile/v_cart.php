<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

    <title>Keranjang Belanja</title>
    <link href="<?php echo base_url() . 'assets/img/logo.png' ?>" rel="shortcut icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'mobile/css/jquery.mmenu.all.css' ?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'mobile/css/style.css' ?>" />

    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">

    <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/jquery.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/jquery.mmenu.min.all.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/jquery.easy-pie-chart.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/o-script.js' ?>"></script>

</head>

<body class="o-page" style="background-color:#fff;">


    <div style="display: flex;height:80px;" class="bannerPane banner-bg">

        <div style="display:flex;justify-content:space-between;height:40px;padding:35px;" class="s-banner-content">
            <h3 style="font-weight: bold;">PEMESANAN DINE IN</h3>

            <a style="padding: 6px;background:green;color:#fff;width:70px;height:35px;font-weight:bold;font-size:14px;text-decoration:none;border-radius:5px;" href="<?php echo base_url() ?>mobile/beranda">Home</a>

        </div>

    </div>
    <div id="content">

        <article>

            <div class="prod-single-content">
                <table style="width:100%">
                    <thead>
                        <tr>

                            <th style="text-align:center;">Menu</th>
                            <th style="text-align:center;">Harga</th>
                            <th style="text-align:center;">Jumlah</th>
                            <th style="text-align:center;">Subtotal</th>
                            <th style="text-align:center;">Aksi</th>
                        </tr>
                        <thead>
                        <tbody style="font-size: 16px;">
                            <form action="<?php echo base_url() . 'mobile/menu/update/' ?>" method="post">
                                <?php $i = 1; ?>
                                <?php foreach ($this->cart->contents() as $items) : ?>
                                    <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

                                    <tr>
                                        <div style="display: flex;" class="row-menu">
                                            <td style="text-align: center;align-items:center;font-size:16px;font-weight:500;">
                                                <img style="width: 60px;height:60px;border-radius:10px;" src="<?php echo base_url() . 'assets/gambar/' . $items['image']; ?>">
                                                <h5 style="font-weight: 700;"><?= $items['name']; ?></h5>
                                            </td>
                                        </div>

                                        <td style="text-align: center;font-size:16px;font-weight:500;">
                                            <?php echo number_format($items['price']); ?><br><br>Disc
                                            <?= $items['diskon']; ?>%
                                        </td>
                                        <td style="padding:0px;width:15%;text-align:center;"><input style="text-align: center;font-weight:700;" type="number" name="<?php echo $i . '[qty]' ?>" value="<?php echo number_format($items['qty']); ?>" min="1"></td>
                                        <td style="text-align:center;font-size:16px;font-weight:500;">
                                            <?php echo number_format($items['subtotal']); ?></td>
                                        <td style="text-align:center;"><a style="padding: 8px;background:red;color:white;border-radius:5px;text-decoration:none;font-weight:bold;" href="<?php echo base_url() . 'mobile/menu/remove/' . $items['rowid']; ?>">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>

                                <?php endforeach; ?>

                    <tfoot>
                        <tr>
                            <td style="font-size:16px;font-weight:bold;" colspan="3">Total</td>
                            <td style="text-align:center;font-size:16px;font-weight:600;">
                                <?php echo "Rp" ?> <?php echo number_format($this->cart->total()); ?></td>
                        </tr>
                    </tfoot>
                    </tbody>



                </table>
                <button type="submit" style="padding:15px;border:1.5px solid #332CF2;font-weight:bold;border-radius:5px;position:absolute;
                margin-top:22em;background:white;margin-left:28rem;color:#332cF2; cursor:pointer;">Update
                    Keranjang</button>
                </form>


                <form action="<?php echo base_url() . 'mobile/menu/check_out' ?>" method="post">
                    <div style="display: block;" class="text-note">


                        <div class="noted">
                            <label style="color: black;font-size:15px;font-weight:bold;" for="">Kirim Note (Opsional):
                            </label>
                            <input name="notes" style="width: 430px;height:100px;font-weight:bold;color:black;margin-right:30px;" placeholder="masukan catatan disini..." type="text">
                        </div>

                        <div style="width: 450px;" class="noted">
                            <label style="color: black;font-size:15px;font-weight:bold;height:max-content;" for="">Masukan
                                No.Meja anda:
                            </label>

                            <div style="display: block;width:460px;" class="content-items">


                                <div class="wrapper">
                                    <input value="Meja 1" type="radio" name="meja" id="option-1">
                                    <input value="Meja 2" type="radio" name="meja" id="option-2">
                                    <input value="Meja 3" type="radio" name="meja" id="option-3">
                                    <input value="Meja 4" type="radio" name="meja" id="option-4">
                                    <input value="Meja 5" type="radio" name="meja" id="option-5">
                                    <input value="Meja 6" type="radio" name="meja" id="option-6">


                                    <label style="width: 60px;" for="option-1" class="option option-1">
                                        <div class="dot"></div>
                                        <span>1</span>
                                    </label>
                                    <label style="width: 60px;" for="option-2" class="option option-2">
                                        <div class="dot"></div>
                                        <span>2</span>
                                    </label>
                                    <label style="width: 60px;" for="option-3" class="option option-3">
                                        <div class="dot"></div>
                                        <span>3</span>
                                    </label>
                                    <label style="width: 60px;" for="option-4" class="option option-4">
                                        <div class="dot"></div>
                                        <span>4</span>
                                    </label>
                                    <label style="width: 60px;" for="option-5" class="option option-5">
                                        <div class="dot"></div>
                                        <span>5</span>
                                    </label>
                                    <label style="width: 60px;" for="option-6" class="option option-6">
                                        <div class="dot"></div>
                                        <span>6</span>
                                    </label>


                                </div>

                                <div class="wrapper">
                                    <input value="Meja 7" type="radio" name="meja" id="option-7">
                                    <input value="Meja 8" type="radio" name="meja" id="option-8">
                                    <input value="Meja 9" type="radio" name="meja" id="option-9">
                                    <input value="Meja 10" type="radio" name="meja" id="option-10">
                                    <input value="Meja 11" type="radio" name="meja" id="option-11">
                                    <input value="Meja 12" type="radio" name="meja" id="option-12">

                                    <label style="width: 60px;" for="option-7" class="option option-7">
                                        <div class="dot"></div>
                                        <span>7</span>
                                    </label>
                                    <label style="width: 60px;" for="option-8" class="option option-8">
                                        <div class="dot"></div>
                                        <span>8</span>
                                    </label>
                                    <label style="width: 60px;" for="option-9" class="option option-9">
                                        <div class="dot"></div>
                                        <span>9</span>
                                    </label>
                                    <label style="width: 60px;" for="option-10" class="option option-10">
                                        <div class="dot"></div>
                                        <span>10</span>
                                    </label>
                                    <label style="width: 60px;" for="option-11" class="option option-11">
                                        <div class="dot"></div>
                                        <span>11</span>
                                    </label>
                                    <label style="width: 60px;" for="option-12" class="option option-12">
                                        <div class="dot"></div>
                                        <span>12</span>
                                    </label>

                                </div>
                            </div>

                        </div>
                    </div>


                    <br>
                    <br>



                    <button style="background-color: #332CF2;color:white;padding:15px;cursor:pointer;font-weight:bold;border:none;border-radius:4px;" type="submit">Pesan Sekarang</a>
                </form>
            </div>
            <div class="notifications info">
                <p style="text-align:justify;">Jika jumlah porsi yang Anda inginkan lebih dari satu. Tambahkan jumlah
                    posrsi sesuai dengan yang Anda inginkan dan klik tombol <b>Update Keranjang</b>.</p>
                <p style="text-align:justify;">Jika masih ada lagi menu yang akan Anda beli selain dari tabel diatas.
                    Klik <a href="<?php echo base_url() . 'mobile/beranda#menu' ?>"><b>disini</b></a> untuk memilih menu
                    lainnya.
                </p>
            </div>
        </article>

    </div>




    <style>
        body {
            font-family: 'Rubik', sans-serif;
        }

        .content-items {
            height: max-content;

            display: flex;
            flex-wrap: wrap;
            width: 430px;
        }




        .wrapper {
            margin-top: 10px;
            display: flex;

            height: 35px;
            width: 520px;
            align-items: center;

            border-radius: 5px;
            padding: 0px;


        }



        .wrapper .option {
            background: #fff;
            height: 100%;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-evenly;
            margin: 0 5px;
            border-radius: 5px;
            cursor: pointer;
            padding: 0px;
            border: 2px solid lightgrey;
            transition: all 0.3s ease;
        }

        .wrapper .option .dot {
            height: 12px;
            width: 12px;
            background: #d9d9d9;
            border-radius: 50%;
            position: relative;
        }

        .wrapper .option .dot::before {
            position: absolute;
            content: "";
            top: 2px;
            left: 2.1px;
            width: 8px;
            height: 8px;
            background: #0069d9;
            border-radius: 50%;
            opacity: 0;
            transform: scale(1.5);
            transition: all 0.3s ease;
        }

        input[type="radio"] {
            display: none;
        }

        #option-1:checked:checked~.option-1,
        #option-2:checked:checked~.option-2,
        #option-3:checked:checked~.option-3,
        #option-4:checked:checked~.option-4,
        #option-5:checked:checked~.option-5,
        #option-6:checked:checked~.option-6,
        #option-7:checked:checked~.option-7,
        #option-8:checked:checked~.option-8,
        #option-9:checked:checked~.option-9,
        #option-10:checked:checked~.option-10,
        #option-11:checked:checked~.option-11,
        #option-12:checked:checked~.option-12 {
            border-color: #0069d9;
            background: #0069d9;
        }

        #option-1:checked:checked~.option-1 .dot,
        #option-2:checked:checked~.option-2 .dot,
        #option-3:checked:checked~.option-3 .dot,
        #option-4:checked:checked~.option-4 .dot,
        #option-5:checked:checked~.option-5 .dot,
        #option-6:checked:checked~.option-6 .dot,
        #option-7:checked:checked~.option-7 .dot,
        #option-8:checked:checked~.option-8 .dot,
        #option-9:checked:checked~.option-9 .dot,
        #option-10:checked:checked~.option-10 .dot,
        #option-11:checked:checked~.option-11 .dot,
        #option-12:checked:checked~.option-12 .dot {
            background: #fff;
        }

        #option-1:checked:checked~.option-1 .dot::before,
        #option-2:checked:checked~.option-2 .dot::before,
        #option-3:checked:checked~.option-3 .dot::before,
        #option-4:checked:checked~.option-4 .dot::before,
        #option-5:checked:checked~.option-5 .dot::before,
        #option-6:checked:checked~.option-6 .dot::before,
        #option-7:checked:checked~.option-7 .dot::before,
        #option-8.content-items:checked~.option-8 .dot::before,
        #option-9.content-items:checked~.option-9 .dot::before,
        #option-10:checked:checked~.option-10 .dot::before,
        #option-11:checked:checked~.option-11 .dot::before,
        #option-12:checked:checked~.option-12 .dot::before {
            opacity: 1;
            transform: scale(1);
        }

        .wrapper .option span {

            font-size: 14px;
            font-weight: bold;
            color: #808080;
        }

        #option-1:checked:checked~.option-1 span,
        #option-2:checked:checked~.option-2 span,
        #option-3:checked:checked~.option-3 span,
        #option-4:checked:checked~.option-4 span,
        #option-5:checked:checked~.option-5 span,
        #option-6:checked:checked~.option-6 span,
        #option-7:checked:checked~.option-7 span,
        #option-8:checked:checked~.option-8 span,
        #option-9:checked:checked~.option-9 span,
        #option-10:checked:checked~.option-10 span,
        #option-11:checked:checked~.option-11 span,
        #option-12:checked:checked~.option-12 span {
            color: #fff;
        }
    </style>

</body>

</html>