 <style>
     #logo {
         /* text-align: center; */
         font-size: 30px;
         font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
     }

     .btn_1 {
         font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
     }

     @media screen and (max-width: 760px) {
         #logo {
             font-size: 15px;
         }
     }
 </style>

 <!--::header part start::-->
 <header class="header_area">
     <div class="sub_header">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-7 col-md-4 col-xl-6">
                     <div id="logo">
                         <!-- <a href="index.htm?l"><img src="img/Logo.png" alt="" title="" /></a> -->
                         <img src="<?= base_url('assets/front/') ?>img/android-chrome-192x192.png" width="40px"> Aplikasi Panduan Makanan Gizi Bayi
                     </div>
                 </div>
                 <div class="col-5 col-md-8 col-xl-6 ">
                     <div class="sub_header_social_icon float-right">
                         <!-- <a href="#"><i class="flaticon-phone"></i>+02 213 - 256 (365)</a>
                         <a href="#" class="btn_1 d-none d-md-inline-block">Become a Volunteer</a> -->
                         <a href="<?= base_url('login_user/logout') ?>" class="btn_1 d-md-inline-block" style="color: white;">Logout</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="main_menu">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <nav class="navbar navbar-expand-lg navbar-light">
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                             <i class="ti-menu"></i>
                         </button>

                         <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                             <ul class="navbar-nav">
                                 <li class="nav-item active">
                                     <a class="nav-link active" href="<?= base_url('user') ?>">Home</a>
                                 </li>
                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Menu MPASI
                                     </a>
                                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>">Semua Menu</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=6-7">6-7 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=8">8 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=9">9 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=10">10 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=11">11 Bulan</a>
                                         <a class="dropdown-item" href="<?= base_url('user/menu') ?>?bulan=12">12 - 18 Bulan</a>
                                     </div>
                                 </li>
                                 <li class="nav-item">
                                     <a href="<?= base_url('user/berita') ?>" class="nav-link">Berita MPASI</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="<?= base_url('user/bahan') ?>" class="nav-link">Bahan MPASI</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="<?= base_url('user/kalkulator') ?>" class=" nav-link">Kalkulator Gizi</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="<?= base_url('user/profil') ?>" class=" nav-link">Profil</a>
                                 </li>
                             </ul>
                         </div>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- Header part end-->