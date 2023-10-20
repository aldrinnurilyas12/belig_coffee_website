<aside style="background-color: #212121;" id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url() ?>admin/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a style="background-color: #424242;" class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i><span style="color: white;">Master</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url() ?>admin/pelanggan">
                        <i class="bi bi-circle"></i><span style="color: white;">Data Pelanggan</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>admin/menu">
                        <i class="bi bi-circle"></i><span style="color: white;">Entry Data Menu</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>admin/menu/load_menu">
                        <i class="bi bi-circle"></i><span style="color: white;">Data Menu</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a style="background-color: #424242;" class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span style="color: white;">Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url() ?>admin/order">
                        <i class="bi bi-circle"></i><span style="color: white;">Pemesanan Dine In</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url() ?>admin/databooking">
                        <i class="bi bi-circle"></i><span style="color: white;">Booking Meja</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url() ?>admin/order/datapembayaran">
                        <i class="bi bi-circle"></i><span style="color: white;">Pembayaran </span>
                    </a>
                </li>



                <li>
                    <a href="<?php echo base_url() ?>admin/testimonial">
                        <i class="bi bi-circle"></i><span style="color: white;">Testimonial</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>admin/pengguna/keluhan">
                        <i class="bi bi-circle"></i><span style="color: white;">Keluhan</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url() ?>admin/menu/view_review">
                        <i class="bi bi-circle"></i><span style="color: white;">Review</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a style="background-color: #424242;" class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span style="color: white;">Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url() ?>admin/laporanpenjualan">
                        <i class="bi bi-circle"></i><span style="color: white;">Laporan Pemesanan</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>admin/testimonial/cetak_laporan">
                        <i class="bi bi-circle"></i><span style="color: white;">Laporan Testimonial</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>admin/dashboard/cetak_keluhan">
                        <i class="bi bi-circle"></i><span style="color: white;">Laporan Keluhan Pelanggan</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url() ?>admin/laporanpenjualan/laporanmenu">
                        <i class="bi bi-circle"></i><span style="color: white;">Laporan Penjualan Menu</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->




    </ul>

</aside><!-- End Sidebar-->