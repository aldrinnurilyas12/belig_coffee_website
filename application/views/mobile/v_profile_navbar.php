<header style="height: 100px;" id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">


        <img style="width: 80px;height:80px;border-radius:50px;" src="<?php echo base_url() ?>../assets/images/logonew.jpg" alt="">


        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?php echo base_url() ?>mobile/beranda">Home</a></li>
                <li><a href="<?php echo base_url() ?>mobile/beranda/about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="<?php echo base_url() ?>mobile/testimonial">Testimonial</a></li>
                <li><a href="<?php echo base_url() ?>mobile/keluhan">Keluhan</a></li>

                <li><a href="<?php echo base_url() ?>mobile/history_order">Riwayat Pemesanan</a></li>


                &nbsp;
                &nbsp;
                &nbsp;
                <div class="dropdown show">
                    <a style="font-weight: bold;background:#FFBF00;padding:5px;color:black;border-radius:5px;" class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                        Booking
                    </a>



                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                        <a style="font-weight: 500;" class="dropdown-item" href="<?php echo base_url() ?>mobile/reservasi">Booking Meja</a>

                        <a style="font-weight: 500;" class="dropdown-item" href="<?php echo base_url() ?>mobile/pembayaran/pembayaranreservasi">Pembayaran</a>
                        <a style="font-weight: 500;" class="dropdown-item" href="<?php echo base_url() ?>mobile/member/historyreservasi">Riwayat
                            Booking</a>
                    </div>

                </div>





            </ul>
        </nav>





        <a style="font-weight: bold;" href="<?php echo base_url() . 'mobile/menu/cart' ?>">
            <i class="material-icons" style="font-size:26px">shopping_cart</i><span style="margin-top: -1px;position:absolute;">(<?= $this->cart->total_items(); ?>)</span>
        </a>
        <div style="background:#EDE4FF ;padding:5px;border-radius:5px;" class="dropdown show">


            <a style="font-weight: bold;" class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                <?php
                if ($this->session->userdata('online')) {
                ?>
                <?php echo $this->session->userdata('nama_pel');
                } ?>
            </a>

            <?php foreach ($datapelanggan->result_array() as $a) {
                $id = $a['plg_id'];
                $nama = $a['plg_nama'];


            ?>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                    <a class="dropdown-item" href="<?= site_url('mobile/member/profil/' . $id) ?>">Profil</a>

                    <a class="dropdown-item" href="<?php echo base_url() ?>mobile/member/logout">Log Out</a>
                </div>
            <?php } ?>
        </div>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>


    </div>
</header>