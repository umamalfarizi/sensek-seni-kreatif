<?php

require_once("dashboard/connection.php");

$query = "SELECT * FROM tb_produk";
$result = mysqli_query( $mysqli, $query );




?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Seni Kreatif</title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="Mennjual Kain Tenun dan Produk Turunannya">
      <meta name="keyword" content="toko, kain tenun, songket, tenun murah, tenun tradisional, sasak">
      <meta name="author" content="Seni Kreatif">
      <meta name="robots" content="index, follow">




      <!--===============================================================================================-->
      <link rel="icon" type="image/png" href="images/icons/favicon.png" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/util.css" />
      <link rel="stylesheet" type="text/css" href="css/main.css" />
      <!--===============================================================================================-->
   </head>
   <body class="animsition">
      <!-- Header -->
      <header>
         <!-- Header desktop -->
         <div class="container-menu-desktop">
            <div class="top-bar">
               <div class="content-topbar flex-sb-m h-full container">
                  <div class="left-top-bar">Free shipping for standard order over $100</div>

                  <div class="right-top-bar flex-w h-full">
                     <a href="#" class="flex-c-m trans-04 p-lr-25"> Help & FAQs </a>

                     <a href="#" class="flex-c-m trans-04 p-lr-25"> My Account </a>

                     <a href="#" class="flex-c-m trans-04 p-lr-25"> EN </a>

                     <a href="#" class="flex-c-m trans-04 p-lr-25"> USD </a>
                  </div>
               </div>
            </div>
            <div class="wrap-menu-desktop">
               <nav class="limiter-menu-desktop container">
                  <!-- Logo desktop -->
                  <a href="index.php" class="logo">
                     <img src="images/icons/logo-01.png" alt="IMG-LOGO" />
                  </a>

                  <!-- Menu desktop -->
                  <div class="menu-desktop">
                     <ul class="main-menu">
                        <li class="active-menu">
                           <a href="index.php">Home</a>
                        </li>

                        <li>
                           <a href="product.php">Shop</a>
                        </li>

                        <li>
                           <a href="about.php">About</a>
                        </li>

                        <li>
                           <a href="contact.php">Contact</a>
                        </li>
                     </ul>
                  </div>

                  <!-- Icon header -->
                  <div class="wrap-icon-header flex-w flex-r-m">
                     <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                     </div>

                     <a href="dashboard/" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                        <i class="fa fa-user-circle"></i>
                     </a>
                  </div>
               </nav>
            </div>
         </div>

         <!-- Header Mobile -->
         <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
               <a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO" /></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
               <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                  <i class="zmdi zmdi-search"></i>
               </div>

               <a href="dashboard/" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10">
                  <i class="fa fa-user-circle"></i>
               </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
               <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
               </span>
            </div>
         </div>

         <!-- Menu Mobile -->
         <div class="menu-mobile">
            <ul class="main-menu-m">
               <li>
                  <a href="index.php">Home</a>
               </li>

               <li>
                  <a href="product.php">Shop</a>
               </li>

               <li>
                  <a href="about.php">About</a>
               </li>

               <li>
                  <a href="contact.php">Contact</a>
               </li>
            </ul>
         </div>

         <!-- Modal Search -->
         <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
               <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                  <img src="images/icons/icon-close2.png" alt="CLOSE" />
               </button>

               <form class="wrap-search-header flex-w p-l-15">
                  <button class="flex-c-m trans-04">
                     <i class="zmdi zmdi-search"></i>
                  </button>
                  <input class="plh3" type="text" name="search" placeholder="Cari produk..." />
               </form>
            </div>
         </div>
      </header>

      <!-- Slider -->
      <section class="section-slide">
         <div class="wrap-slick1">
            <div class="slick1">
               <div class="item-slick1" style="background-image: url(images/slide-01.jpg)">
                  <div class="container h-full">
                     <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                           <span class="ltext-101 cl2 respon2"> Women Collection 2018 </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                           <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">NEW SEASON</h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                           <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"> Shop Now </a>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="item-slick1" style="background-image: url(images/slide-02.jpg)">
                  <div class="container h-full">
                     <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                           <span class="ltext-101 cl2 respon2"> Men New-Season </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                           <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">Jackets & Coats</h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                           <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"> Shop Now </a>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="item-slick1" style="background-image: url(images/slide-03.jpg)">
                  <div class="container h-full">
                     <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                           <span class="ltext-101 cl2 respon2"> Men Collection 2018 </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                           <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">New arrivals</h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                           <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"> Shop Now </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Banner -->
      <div class="sec-banner bg0 p-t-80 p-b-50">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                     <img src="images/banner-01.jpg" alt="IMG-BANNER" />

                     <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                           <span class="block1-name ltext-102 trans-04 p-b-8"> Women </span>

                           <span class="block1-info stext-102 trans-04"> Spring 2018 </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                           <div class="block1-link stext-101 cl0 trans-09">Belanja Sekarang</div>
                        </div>
                     </a>
                  </div>
               </div>

               <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                     <img src="images/banner-02.jpg" alt="IMG-BANNER" />

                     <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                           <span class="block1-name ltext-102 trans-04 p-b-8"> Men </span>

                           <span class="block1-info stext-102 trans-04"> Spring 2018 </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                           <div class="block1-link stext-101 cl0 trans-09">Belanja Sekarang</div>
                        </div>
                     </a>
                  </div>
               </div>

               <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                  <!-- Block1 -->
                  <div class="block1 wrap-pic-w">
                     <img src="images/banner-03.jpg" alt="IMG-BANNER" />

                     <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                           <span class="block1-name ltext-102 trans-04 p-b-8"> Accessories </span>

                           <span class="block1-info stext-102 trans-04"> New Trend </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                           <div class="block1-link stext-101 cl0 trans-09">Belanja Sekarang</div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Product -->
      <section class="bg0 p-t-23 p-b-140">
         <div class="container">
            <div class="p-b-10">
               <h3 class="ltext-103 cl5">Produk Terbaru</h3>
            </div>

            <div class="flex-w flex-sb-m p-b-52">
               <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">All Products</button>

                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">Women</button>

                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">Men</button>

                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">Bag</button>

                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">Shoes</button>

                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">Watches</button>
               </div>

               <div class="flex-w flex-c-m m-tb-10">
                  <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                     <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                     <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                     Cari
                  </div>
               </div>

               <!-- Search product -->
               <div class="dis-none panel-search w-full p-t-10 p-b-15">
                  <div class="bor8 dis-flex p-l-15">
                     <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                     </button>

                     <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Cari produk" />
                  </div>
               </div>
            </div>

            <div class="row isotope-grid">

            <?php 
            foreach( $result as $produk ) :
               $idProduk = $produk['id_produk'];
               $nama = $produk['nama'];
               $idKategori = $produk['id_kategori'];
               $idAksesoris = $produk['id_jenis_aksesoris'];
               $foto = $produk['foto'];
               $harga = $produk['harga'];
               $stok = $produk['stok'];
               $deskripsi = $produk['deskripsi'];
            ?>
               <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                  <!-- Block2 -->
                  <div class="block2">
                     <div class="block2-pic hov-img0">
                        <img src="dashboard/<?= $foto; ?>" alt="IMG-PRODUCT" />
                        <a href="" id="tes" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1"
                        data-nama="<?= $nama; ?>"
                        data-idkategori="<?php $query="SELECT * FROM tb_kategori WHERE id_kategori = '{$idKategori}'"; $result=mysqli_query($mysqli, $query); foreach($result as $k){ echo $k['nama']; } ?>"
                        data-idjenisaksesoris="<?php $query="SELECT * FROM tb_jenis_aksesoris WHERE id_jenis_aksesoris = '{$idAksesoris}'"; $result=mysqli_query($mysqli, $query); foreach($result as $a){ echo $a['nama']; } ?>"
                        data-foto="<?= $foto; ?>"
                        data-harga="<?= number_format($harga); ?>"
                        data-stok="<?= $stok; ?>"
                        data-deskripsi="<?= $deskripsi; ?>"
                        ">
                           Rincian
                        </a>  
                     </div>



                     <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l">
                           <a href="product-detail.php?id_produk=<?= $idProduk; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> <?= $nama; ?> </a>

                           <span class="stext-105 cl3"> Rp <?= number_format($harga); ?> </span>
                        </div>
                     </div>
                  </div>
               </div>
            
            <?php endforeach; ?>

               
            </div>

            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45">
               <a href="product.php" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04"> LEBIH BANYAK </a>
            </div>
         </div>
      </section>

      <!-- Footer -->
      <footer class="bg3 p-t-75 p-b-32">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-lg-3 p-b-50">
                  <h4 class="stext-301 cl0 p-b-30">Categories</h4>

                  <ul>
                     <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04"> Women </a>
                     </li>

                     <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04"> Men </a>
                     </li>

                     <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04"> Shoes </a>
                     </li>

                     <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04"> Watches </a>
                     </li>
                  </ul>
               </div>

               <div class="col-sm-6 col-lg-3 p-b-50">
                  <h4 class="stext-301 cl0 p-b-30">Help</h4>

                  <ul>
                     <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04"> Track Order </a>
                     </li>

                     <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04"> Returns </a>
                     </li>

                     <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04"> Shipping </a>
                     </li>

                     <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04"> FAQs </a>
                     </li>
                  </ul>
               </div>

               <div class="col-sm-6 col-lg-3 p-b-50">
                  <h4 class="stext-301 cl0 p-b-30">GET IN TOUCH</h4>

                  <p class="stext-107 cl7 size-201">Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879</p>

                  <div class="p-t-27">
                     <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                     </a>

                     <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                     </a>

                     <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-pinterest-p"></i>
                     </a>
                  </div>
               </div>

               <div class="col-sm-6 col-lg-3 p-b-50">
                  <h4 class="stext-301 cl0 p-b-30">Newsletter</h4>

                  <form>
                     <div class="wrap-input1 w-full p-b-4">
                        <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com" />
                        <div class="focus-input1 trans-04"></div>
                     </div>

                     <div class="p-t-18">
                        <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">Subscribe</button>
                     </div>
                  </form>
               </div>
            </div>

            <div class="p-t-40">
               <div class="flex-c-m flex-w p-b-18">
                  <a href="#" class="m-all-1">
                     <img src="images/icons/icon-pay-01.png" alt="ICON-PAY" />
                  </a>

                  <a href="#" class="m-all-1">
                     <img src="images/icons/icon-pay-02.png" alt="ICON-PAY" />
                  </a>

                  <a href="#" class="m-all-1">
                     <img src="images/icons/icon-pay-03.png" alt="ICON-PAY" />
                  </a>

                  <a href="#" class="m-all-1">
                     <img src="images/icons/icon-pay-04.png" alt="ICON-PAY" />
                  </a>

                  <a href="#" class="m-all-1">
                     <img src="images/icons/icon-pay-05.png" alt="ICON-PAY" />
                  </a>
               </div>

               <p class="stext-107 cl6 txt-center">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>
                     document.write(new Date().getFullYear());
                  </script>
                  All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by
                  <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               </p>
            </div>
         </div>
      </footer>

      <!-- Back to top -->
      <div class="btn-back-to-top" id="myBtn">
         <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
         </span>
      </div>

      <!-- Modal1 -->
      <div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
         <div class="overlay-modal1 js-hide-modal1"></div>

         <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
               <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                  <img src="images/icons/icon-close.png" alt="CLOSE" />
               </button>

               <div class="row">
                  <div class="col-md-6 col-lg-7 p-b-30">
                     <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="slick3 gallery-lb">
                           <div class="tes">
                              <img src="" alt="IMG-PRODUCT" id="foto" style="width: 99%;"/>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6 col-lg-5 p-b-30">
                     <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14" id="nama"></h4>

                        <span class="mtext-106 cl2" id="harga"></span>

                        <div class="bor10 m-t-50 p-t-43 p-b-40">
                           <!-- Tab01 -->
                           <div class="tab01">
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs" role="tablist">
                                 <li class="nav-item p-b-10">
                                    <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Deskripsi</a>
                                 </li>

                                 <li class="nav-item p-b-10">
                                    <a class="nav-link" data-toggle="tab" href="#information" role="tab">Info Tambahan</a>
                                 </li>
                              </ul>

                              <!-- Tab panes -->
                              <div class="tab-content p-t-43">
                                 <!-- - -->
                                 <div class="tab-pane fade show active" id="description" role="tabpanel">
                                    <div class="how-pos2 p-lr-15-md">
                                       <p class="stext-102 cl6" id="deskripsi">
                                       </p>
                                    </div>
                                 </div>

                                 <!-- - -->
                                 <div class="tab-pane fade" id="information" role="tabpanel">
                                    <div class="row">
                                       <div class="col-sm-10 m-lr-auto">
                                          <ul class="p-lr-28 p-lr-15-sm">
                                             <li class="flex-w flex-t p-b-7">
                                                <span class="stext-102 cl3 size-205"> Jenis Kain </span>

                                                <span class="stext-102 cl6 size-206" id="kategori"></span>
                                             </li>

                                             <li class="flex-w flex-t p-b-7">
                                                <span class="stext-102 cl3 size-205"> Aksesoris </span>

                                                <span class="stext-102 cl6 size-206" id="aksesoris"></span>
                                             </li>

                                             <li class="flex-w flex-t p-b-7">
                                                <span class="stext-102 cl3 size-205"> Tersedia </span>

                                                <span class="stext-102 cl6 size-206" id="stok"></span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="p-t-33">
                           <div class="flex-w flex-r-m p-b-10">
                              <div class="size-204 flex-w flex-m respon6-next">
                                 <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">Add to cart</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!--===============================================================================================-->
      <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/animsition/js/animsition.min.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/bootstrap/js/popper.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/select2/select2.min.js"></script>
      <script>
         $('.js-select2').each(function () {
            $(this).select2({
               minimumResultsForSearch: 20,
               dropdownParent: $(this).next('.dropDownSelect2'),
            });
         });
      </script>
      <!--===============================================================================================-->
      <script src="vendor/daterangepicker/moment.min.js"></script>
      <script src="vendor/daterangepicker/daterangepicker.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/slick/slick.min.js"></script>
      <script src="js/slick-custom.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/parallax100/parallax100.js"></script>
      <script>
         $('.parallax100').parallax100();
      </script>
      <!--===============================================================================================-->
      <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
      <script>
         $('.gallery-lb').each(function () {
            // the containers for all your galleries
            $(this).magnificPopup({
               delegate: 'a', // the selector for gallery item
               type: 'image',
               gallery: {
                  enabled: true,
               },
               mainClass: 'mfp-fade',
            });
         });
      </script>
      <!--===============================================================================================-->
      <script src="vendor/isotope/isotope.pkgd.min.js"></script>
      <!--===============================================================================================-->
      <script src="vendor/sweetalert/sweetalert.min.js"></script>
      <script>
         $('.js-addwish-b2').on('click', function (e) {
            e.preventDefault();
         });

         $('.js-addwish-b2').each(function () {
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function () {
               swal(nameProduct, 'is added to wishlist !', 'success');

               $(this).addClass('js-addedwish-b2');
               $(this).off('click');
            });
         });

         $('.js-addwish-detail').each(function () {
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function () {
               swal(nameProduct, 'is added to wishlist !', 'success');

               $(this).addClass('js-addedwish-detail');
               $(this).off('click');
            });
         });

         /*---------------------------------------------*/

         $('.js-addcart-detail').each(function () {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function () {
               swal(nameProduct, 'is added to cart !', 'success');
            });
         });
      </script>
      <!--===============================================================================================-->
      <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <script>
         $('.js-pscroll').each(function () {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
               wheelSpeed: 1,
               scrollingThreshold: 1000,
               wheelPropagation: false,
            });

            $(window).on('resize', function () {
               ps.update();
            });
         });
      </script>
      <script>

      $(document).ready(function() {
         $(document).on('click', '#tes', function(){
            var nama = $(this).data('nama');
            var harga = $(this).data('harga');
            var idkategori = $(this).data('idkategori');
            var idjenis = $(this).data('idjenisaksesoris');
            var stok = $(this).data('stok');
            var deskripsi = $(this).data('deskripsi');
            var foto = $(this).data('foto');
            $('#nama').text(nama);
            $('#kategori').text(idkategori);
            $('#aksesoris').text(idjenis);
            $('#harga').text('Rp ' + harga);
            $('#stok').text(stok);
            $('#foto').attr('src', 'dashboard/'+foto);
            $('#deskripsi').text(deskripsi);
         })
      })

      </script>
      <!--===============================================================================================-->
      <script src="js/main.js"></script>
   </body>
</html>
