<?php

require_once("dashboard/connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <title>Produk</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
   <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
   <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
   <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
   
   <!-- Header -->
   <header class="header-v4">
      <!-- Header desktop -->
      <div class="container-menu-desktop">
         <div class="wrap-menu-desktop how-shadow1">
            <nav class="limiter-menu-desktop container">
               
               <!-- Logo desktop -->		
               <a href="index.php" class="logo">
                  <img src="images/icons/logo-01.png" alt="IMG-LOGO">
               </a>

               <!-- Menu desktop -->
               <div class="menu-desktop">
                  <ul class="main-menu">
                     <li>
                        <a href="index.php">Home</a>
                     </li>

                     <li class="active-menu">
                        <a href="product.php">Shop</a>
                     </li>

                     <li>
                        <a href="about.php">About Us</a>
                     </li>

                     <li>
                        <a href="contact.php">Contact Us</a>
                     </li>
                  </ul>
               </div>	

               <!-- Icon header -->
               <div class="wrap-icon-header flex-w flex-r-m">
                  <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                     <i class="zmdi zmdi-search"></i>
                  </div>

                  <a href="dashboard/" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
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
            <a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
         </div>

         <!-- Icon header -->
         <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
               <i class="zmdi zmdi-search"></i>
            </div>

            <a href="dashboard/" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 ">
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
               <a href="about.php">About Us</a>
            </li>

            <li>
               <a href="contact.php">Contact Us</a>
            </li>
         </ul>
      </div>

      <!-- Modal Search -->
      <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
         <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
               <img src="images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
               <button class="flex-c-m trans-04">
                  <i class="zmdi zmdi-search"></i>
               </button>
               <input class="plh3" type="text" name="search" placeholder="Cari Produk.." autocomplete="off" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>">
            </form>
         </div>
      </div>
   </header>
   
   
   <!-- Product -->
   <div class="bg0 m-t-23 p-b-140">
      <div class="container">
         <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
               <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">Semua</button>

               <?php
               
                  $query = "SELECT * FROM tb_kategori";
                  $result = mysqli_query($mysqli, $query);
                  foreach( $result as $ktg ) :
               
               ?>
         
                  <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".<?= $ktg['id_kategori']; ?>"><?= $ktg['nama']; ?></button>

               <?php endforeach; ?>
            </div>

            <div class="flex-w flex-c-m m-tb-10">
               <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                  <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                  <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                  Filter
               </div>

               <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                  <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                  <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                  Cari
               </div>
            </div>
            
            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
               <form>
                  <div class="bor8 dis-flex p-l-15">
                     <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                     </button>
                     <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search" placeholder="Cari produk.." autocomplete="off" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>">
                  </div>	
               </form>
            </div>

            <!-- Filter -->
            <div class="dis-none panel-filter w-full p-t-10">
               <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                  <div class="filter-col1 p-r-15 p-b-27">
                     <div class="mtext-102 cl2 p-b-15">
                        Sort By
                     </div>

                     <ul>
                        <li class="p-b-6">
                           <a href="#" class="filter-link stext-106 trans-04">
                              Default
                           </a>
                        </li>

                        <li class="p-b-6">
                           <a href="#" class="filter-link stext-106 trans-04">
                              Popularity
                           </a>
                        </li>

                        <li class="p-b-6">
                           <a href="#" class="filter-link stext-106 trans-04">
                              Average rating
                           </a>
                        </li>

                        <li class="p-b-6">
                           <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                              Newness
                           </a>
                        </li>

                        <li class="p-b-6">
                           <a href="#" class="filter-link stext-106 trans-04">
                              Price: Low to High
                           </a>
                        </li>

                        <li class="p-b-6">
                           <a href="#" class="filter-link stext-106 trans-04">
                              Price: High to Low
                           </a>
                        </li>
                     </ul>
                  </div>

                  <div class="filter-col2 p-r-15 p-b-27">
                     <div class="mtext-102 cl2 p-b-15">
                        Price
                     </div>

                     <ul>
                        <li class="p-b-6">
                           <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                              All
                           </a>
                        </li>

                        <li class="p-b-6">
                           <a href="#" class="filter-link stext-106 trans-04">
                              $0.00 - $50.00
                           </a>
                        </li>

                        <li class="p-b-6">
                           <a href="#" class="filter-link stext-106 trans-04">
                              $50.00 - $100.00
                           </a>
                        </li>

                        <li class="p-b-6">
                           <a href="#" class="filter-link stext-106 trans-04">
                              $100.00 - $150.00
                           </a>
                        </li>

                        <li class="p-b-6">
                           <a href="#" class="filter-link stext-106 trans-04">
                              $150.00 - $200.00
                           </a>
                        </li>

                        <li class="p-b-6">
                           <a href="#" class="filter-link stext-106 trans-04">
                              $200.00+
                           </a>
                        </li>
                     </ul>
                  </div>

                  <div class="filter-col3 p-r-15 p-b-27">
                     <div class="mtext-102 cl2 p-b-15">
                        Color
                     </div>

                     <ul>
                        <li class="p-b-6">
                           <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                              <i class="zmdi zmdi-circle"></i>
                           </span>

                           <a href="#" class="filter-link stext-106 trans-04">
                              Black
                           </a>
                        </li>

                        <li class="p-b-6">
                           <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                              <i class="zmdi zmdi-circle"></i>
                           </span>

                           <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                              Blue
                           </a>
                        </li>

                        <li class="p-b-6">
                           <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                              <i class="zmdi zmdi-circle"></i>
                           </span>

                           <a href="#" class="filter-link stext-106 trans-04">
                              Grey
                           </a>
                        </li>

                        <li class="p-b-6">
                           <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
                              <i class="zmdi zmdi-circle"></i>
                           </span>

                           <a href="#" class="filter-link stext-106 trans-04">
                              Green
                           </a>
                        </li>

                        <li class="p-b-6">
                           <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
                              <i class="zmdi zmdi-circle"></i>
                           </span>

                           <a href="#" class="filter-link stext-106 trans-04">
                              Red
                           </a>
                        </li>

                        <li class="p-b-6">
                           <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
                              <i class="zmdi zmdi-circle-o"></i>
                           </span>

                           <a href="#" class="filter-link stext-106 trans-04">
                              White
                           </a>
                        </li>
                     </ul>
                  </div>

                  <div class="filter-col4 p-b-27">
                     <div class="mtext-102 cl2 p-b-15">
                        Tags
                     </div>

                     <div class="flex-w p-t-4 m-r--5">
                        <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                           Fashion
                        </a>

                        <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                           Lifestyle
                        </a>

                        <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                           Denim
                        </a>

                        <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                           Streetstyle
                        </a>

                        <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                           Crafts
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="row isotope-grid">

            <?php

            if( isset($_GET['search']) ) {
               $query = "SELECT * FROM tb_produk WHERE nama LIKE '%" . $_GET['search'] . "%' ";
               $result = mysqli_query( $mysqli, $query );
            }
            else {
               $query = "SELECT * FROM tb_produk";
               $result = mysqli_query( $mysqli, $query );
            }
            
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
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?= $idKategori; ?>">
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
         
         <?php if( !isset($_GET['search']) ) : ?>
         <!-- Load more -->
         <div class="flex-c-m flex-w w-full p-t-45">
            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
               Load More
            </a>
         </div>
         <?php endif; ?>
      </div>
   </div>
      

   <!-- Footer -->
   <footer class="bg3 p-t-75 p-b-32">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
               <h4 class="stext-301 cl0 p-b-30">
                  Categories
               </h4>

               <ul>
                  <li class="p-b-10">
                     <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                        Women
                     </a>
                  </li>

                  <li class="p-b-10">
                     <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                        Men
                     </a>
                  </li>

                  <li class="p-b-10">
                     <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                        Shoes
                     </a>
                  </li>

                  <li class="p-b-10">
                     <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                        Watches
                     </a>
                  </li>
               </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
               <h4 class="stext-301 cl0 p-b-30">
                  Help
               </h4>

               <ul>
                  <li class="p-b-10">
                     <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                        Track Order
                     </a>
                  </li>

                  <li class="p-b-10">
                     <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                        Returns 
                     </a>
                  </li>

                  <li class="p-b-10">
                     <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                        Shipping
                     </a>
                  </li>

                  <li class="p-b-10">
                     <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                        FAQs
                     </a>
                  </li>
               </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
               <h4 class="stext-301 cl0 p-b-30">
                  GET IN TOUCH
               </h4>

               <p class="stext-107 cl7 size-201">
                  Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
               </p>

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
               <h4 class="stext-301 cl0 p-b-30">
                  Newsletter
               </h4>

               <form>
                  <div class="wrap-input1 w-full p-b-4">
                     <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                     <div class="focus-input1 trans-04"></div>
                  </div>

                  <div class="p-t-18">
                     <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                        Subscribe
                     </button>
                  </div>
               </form>
            </div>
         </div>

         <div class="p-t-40">
            <div class="flex-c-m flex-w p-b-18">
               <a href="#" class="m-all-1">
                  <img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
               </a>

               <a href="#" class="m-all-1">
                  <img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
               </a>

               <a href="#" class="m-all-1">
                  <img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
               </a>

               <a href="#" class="m-all-1">
                  <img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
               </a>

               <a href="#" class="m-all-1">
                  <img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
               </a>
            </div>

            <p class="stext-107 cl6 txt-center">
               <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
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
   <div class="wrap-modal1 js-modal1 p-t-50 p-b-20">
      <div class="overlay-modal1 js-hide-modal1"></div>

      <div class="container">
         <div class="bg0 p-t-35 p-b-20 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
               <img src="images/icons/icon-close.png" alt="CLOSE" />
            </button>

            <div class="row">
               <div class="col-md-6 p-b-20">
                  <div class="p-l-35 p-r-25 p-lr-0-lg">
                     <img src="" alt="IMG-PRODUCT" id="foto" style="width: 100%;"/>
                  </div>
               </div>

               <div class="col-md-6  p-b-20">
                  <div class="p-r-50 p-t-5 p-lr-0-lg">

                     <?php $nama = '<span id="nama"></span>'; ?>

                     <h4 class="mtext-105 cl2 js-name-detail p-b-14"><?= $nama; ?></h4>

                     <span class="mtext-106 cl2" id="harga"></span>

                     <div class="bor10 m-t-25 p-t-33 p-b-20">
                        <!-- Tab01 -->
                        <div class="tab01">
                           <!-- Nav tabs -->
                           <ul class="nav nav-tabs" role="tablist">
                              <li class="nav-item p-b-5">
                                 <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Deskripsi</a>
                              </li>

                              <li class="nav-item p-b-5">
                                 <a class="nav-link" data-toggle="tab" href="#information" role="tab">Info Tambahan</a>
                              </li>
                           </ul>

                           <!-- Tab panes -->
                           <div class="tab-content p-t-25">
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
                                       <ul class="p-lr-25 p-lr-15-sm">
                                          <li class="flex-w flex-t p-b-7">
                                             <span class="stext-102 cl3 size-205"> Jenis Kain </span>
                                          
                                             <span class="stext-102 cl6 size-206" id="kategori"></span>
                                          </li>

                                          <li class="flex-w flex-t p-b-7">
                                             <span class="stext-102 cl3 size-205"> Aksesoris </span>

                                             <span class="stext-102 cl6 size-206" id="aksesoris"></span>
                                          </li>

                                          <li class="flex-w flex-t p-b-7">
                                             <span class="stext-102 cl3 size-205"> Stok </span>

                                             <span class="stext-102 cl6 size-206" id="stok"></span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="p-t-30">
                        <div style="justify-content: center; align-items:center;">
                           <a href="" class="flex-c-m stext-103 cl2 size-105 bg2 bor2 hov-btn1 p-lr-15 trans-04">Pesan Via Whatsapp <i class="fa fa-whatsapp m-l-5"></i> </a>
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
      $(".js-select2").each(function(){
         $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
         });
      })
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
      $('.gallery-lb').each(function() { // the containers for all your galleries
         $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
               enabled:true
            },
            mainClass: 'mfp-fade'
         });
      });
   </script>
<!--===============================================================================================-->
   <script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
   <script src="vendor/sweetalert/sweetalert.min.js"></script>
   <script>
      $('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
         e.preventDefault();
      });

      $('.js-addwish-b2').each(function(){
         var nameProduct = $(this).parent().parent().find('.js-name-b2').php();
         $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
         });
      });

      $('.js-addwish-detail').each(function(){
         var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').php();

         $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
         });
      });

      /*---------------------------------------------*/

      $('.js-addcart-detail').each(function(){
         var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').php();
         $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
         });
      });
   
   </script>
<!--===============================================================================================-->
   <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
   <script>
      $('.js-pscroll').each(function(){
         $(this).css('position','relative');
         $(this).css('overflow','hidden');
         var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
         });

         $(window).on('resize', function(){
            ps.update();
         })
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