<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />

    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

    <title>Booking</title>

    <link href="<?php echo base_url() ?>yummy/assets/css/main.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'mobile/css/jquery.mmenu.all.css' ?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() . 'mobile/css/style.css' ?>" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-startup-image" href="img/apple-touch-startup-image.png">


    <!-- Template Main CSS File -->


    <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/jquery.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/jquery.mmenu.min.all.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/jquery.easy-pie-chart.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'mobile/js/o-script.js' ?>"></script>

</head>

<body class="o-page" style="background-color:#fff;">



    <div style="display: flex;height:80px;" class="bannerPane banner-bg">

        <div style="display:flex;justify-content:space-between;height:40px;padding:35px;" class="s-banner-content">
            <h3 style="font-weight: bold;">Invoice Booking Anda</h3>

            <a style="padding: 6px;background:green;color:#fff;width:70px;height:35px;font-weight:bold;font-size:14px;text-decoration:none;border-radius:5px;" href="<?php echo base_url() ?>mobile/beranda">Home</a>

        </div>

    </div>
    <div id="content">
        <?php
        $b = $data->row_array();
        $no = 1;
        ?>
        <article>

            <div class="prod-single-content">
                <table style="border:none;padding:0px;font-size:3px;">
                    <tr style="background-color:#fff;">
                        <td>No Reservasi</td>
                        <td>:</td>
                        <td style="font-weight: 700;"><?php echo $b['booking_id'] ?></td>
                    </tr>
                    <tr style="background-color:#fff;">
                        <td>Tanggal Reservasi</td>
                        <td>:</td>
                        <td style="font-weight: 700;"><?php echo $b['tanggal_booking'] ?></td>
                    </tr>

                    <tr style="background-color:#fff;">
                        <td>Tanggal Kedatangan</td>
                        <td>:</td>
                        <td style="font-weight: 700;"><?php echo $b['tanggal_kedatangan'] ?></td>
                    </tr>
                    <tr style="background-color:#fff;">
                        <td>Pelanggan</td>
                        <td>:</td>
                        <td style="font-weight: 700;"><?php echo $b['plg_nama'] ?></td>
                    </tr>

                    <tr style="background-color:#fff;">
                        <td>Jumlah Tamu</td>
                        <td>:</td>
                        <td style="font-weight: 700;"><?php echo $b['jumlah_tamu'] ?>&nbsp; Orang</td>
                    </tr>
                    <tr style="background-color:#fff;">
                        <td>Notes</td>
                        <td>:</td>
                        <td style="font-weight: 700;"><?php echo $b['notes'] ?></td>
                    </tr>
                    <tr style="background-color:#fff;">
                        <td>No Meja</td>
                        <td>:</td>
                        <td style="font-weight: 700;"> <?php echo $b['no_meja'] ?></td>
                    </tr>

                    <tr style="background-color:#fff;">
                        <td>Status Bayar</td>
                        <td>:</td>
                        <td style="font-weight: 700;"> <?php echo $b['status_bayar'] ?></td>
                    </tr>
                </table>
                <table style="width:100%;border:none;padding:0px;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th style="text-align:center;">Menu</th>
                            <th style="text-align:center;">Harga</th>
                            <th style="text-align:center;">Porsi</th>
                            <th style="text-align:center;">Subtotal</th>
                        </tr>
                        <thead>
                        <tbody>


                            <?php foreach ($data->result_array() as $a) {

                                $menu = $a['detail_menu_nama'];
                                $harga = $a['detail_harjul'];
                                $porsi = $a['detail_porsi'];
                                $subtotal = $a['detail_subtotal'];

                            ?>
                                <tr>

                                    <div style="display: flex;" class="row-menu">
                                        <td style="width: 60px;font-size:16px;"><?php echo $no++ ?></td>
                                        <td style="text-align: center;align-items:center;font-size:16px;font-weight:500;">

                                            <h5 style="font-weight: 700;"><?= $menu; ?></h5>
                                        </td>
                                    </div>
                                    <td style="text-align:center;font-size:16px;">Rp <?php echo number_format($harga); ?>
                                    </td>
                                    <td style="text-align:center;font-size:16px;"><?php echo $porsi; ?></td>
                                    <td style="text-align:center;font-size:16px;">Rp <?php echo number_format($subtotal); ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">Total</td>
                            <td style="text-align:center;font-size:16px;">Rp
                                <?php echo number_format($b['total']) ?>
                            </td>
                        </tr>
                    </tfoot>
                </table>

                </form>
            </div>

        </article>

        <div style="margin-bottom: 50px;display:flex;justify-content:center;" class="btn-bayar">


            <a style="background-color: blue;padding:5px;border-radius:5px;color:white;text-decoration:none;" href="<?php echo base_url() ?>mobile/pembayaran/pembayaranreservasi">Lakukan
                Pembayaran</a>
        </div>

    </div>


    <!-- Menu navigation -->
    <!-- <nav id="menu">
        <ul>
            <li class="Selected">
                <a href="#close">
                    <i class="fa fa-times-circle"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() . 'mobile/beranda' ?>">
                    <i class="fa fa-home"></i>Home
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() . 'mobile/menu/cart' ?>">
                    <i class="fa fa-shopping-cart"></i>Keranjang Belanja (<?= $this->cart->total_items(); ?>)
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() . 'mobile/menu/makanan' ?>">
                    <i class="fa fa-cutlery"></i>Makanan
                </a>
            </li>

            <li>
                <a href="<?php echo base_url() . 'mobile/menu/minuman' ?>">
                    <i class="fa fa-glass"></i>Minuman
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() . 'mobile/menu/favorite' ?>">
                    <i class="fa fa-star"></i>Favorite
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() . 'mobile/menu' ?>">
                    <i class="fa fa-fire"></i>Hot Promo
                </a>
            </li>

            <li>
                <a href="<?php echo base_url() . 'mobile/tracker' ?>">
                    <i class="fa fa-crosshairs"></i>Tracker
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() . 'mobile/member/register' ?>">
                    <i class="fa fa-user"></i>Mendaftar
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() . 'mobile/gallery' ?>">
                    <i class="fa fa-camera-retro"></i>Gallery
                </a>
            </li>


            <?php if ($this->session->userdata('online') == TRUE) : ?>
                <li>
                    <a href="<?php echo base_url() . 'mobile/konfirmasi' ?>">
                        <i class="fa fa-exchange"></i>Konfirmasi
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url() . 'mobile/myfood' ?>">
                        <i class="fa fa-cutlery"></i>My Food
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url() . 'mobile/member/logout' ?>">
                        <i class="fa fa-sign-out"></i>Logout
                    </a>
                </li>
            <?php else : ?>
                <li>
                    <a href="<?php echo base_url() . 'mobile/member' ?>">
                        <i class="fa fa-sign-in"></i>Login
                    </a>
                </li>
            <?php endif; ?>
        </ul>

    </nav> -->
    <!-- Vendor JS Files -->



</body>

</html>