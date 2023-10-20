<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">

            <h1>Belig Coffee</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?php echo base_url() ?>mobile/beranda">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="<?php echo base_url() ?>mobile/testimonial">Testimonial</a></li>
                <li><a href="<?php echo base_url() ?>mobile/history_order">Riwayat Dine In</a></li>


            </ul>
        </nav>
        <a style="font-weight: bold;" href="<?php echo base_url() . 'mobile/menu/cart' ?>">
            <i class="material-icons" style="font-size:26px">shopping_cart</i><span style="margin-top: -1px;position:absolute;">(<?= $this->cart->total_items(); ?>)</span>
        </a>
        <a style="font-weight: 600;" class="btn-book-a-table" href="<?php echo base_url() ?>mobile/member/logout"><?php
                                                                                                                    if ($this->session->userdata('online')) {
                                                                                                                    ?>
            <?php echo $this->session->userdata('nama_pel');
                                                                                                                    } ?></a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header>