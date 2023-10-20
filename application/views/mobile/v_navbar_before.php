 <!-- ======= Header ======= -->
 <header id="header" style="height: 100px;" class="header fixed-top d-flex align-items-center">
     <div class="container d-flex align-items-center justify-content-between">

         <!-- Uncomment the line below if you also wish to use an image logo -->
         <!-- <img src="../yummy/assets/img/logo.png" alt=""> -->
         <img style="width: 80px;height:80px;border-radius:50px;" src="<?php echo base_url() ?>assets/images/logonew.jpg" alt="">


         <nav id="navbar" class="navbar">
             <ul>
                 <li><a href="<?php echo base_url() ?>mobile/home">Home</a></li>
                 <li><a href="<?php echo base_url() ?>mobile/home/about">About</a></li>
                 <li><a href="<?php echo base_url() ?>mobile/home#menu">Menu</a></li>
                 <li><a href="<?php echo base_url() ?>mobile/testimonial/before_testimonial">Testimonial</a></li>



             </ul>
         </nav><!-- .navbar -->
         <a style="font-weight: bold;" href="<?php echo base_url() . 'mobile/menu/cart' ?>">
             <i class="material-icons" style="font-size:26px">shopping_cart</i><span style="margin-top: -1px;position:absolute;">(<?= $this->cart->total_items(); ?>)</span>
         </a>
         <a style="font-weight: 600;" class="btn-book-a-table" href="<?php echo base_url() ?>login">Login</a>
         <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
         <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

     </div>
 </header>