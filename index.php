<?php

require_once("dashboard/connection.php");

// fetching tabel kontak
$query = "SELECT * FROM tb_kontak";
$result = mysqli_query( $mysqli, $query );
$kontak = mysqli_fetch_assoc($result);
if( is_null($kontak) ) {
   $kontak['telepon'] = "";
   $kontak['email'] = "";
   $kontak['alamat'] = "";
   $kontak['link_gmaps'] = "";
}



$query3 = "SELECT * FROM tb_seo";
$result3 = mysqli_query( $mysqli, $query3 );
$seo = mysqli_fetch_assoc($result3);

if( is_null($seo) ) {
   $seo['author'] = "";
   $seo['description'] = "";
   $seo['keywords'] = "";
   $seo['robot_index'] = 1;
   $seo['robot_follow'] = 1;
}


?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Sasak Sensek</title>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="<?= $seo['description']; ?>">
      <meta name="keywords" content="<?= $seo['keywords']; ?>">
      <meta name="author" content="<?= $seo['author']; ?>">
      <meta name="robots" content="<?= ($seo['robot_index']==1) ? "index" : "noindex"; ?>, <?= ($seo['robot_follow']==1) ? "follow" : "nofollow" ; ?>">




      <!--===============================================================================================-->
      <link rel="icon" type="image/png" href="images/icons/ikon.png" />
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
      <!-- Bootstrap icon -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

   </head>
   <body class="animsition">
      <!-- Header -->
      <header>
         <!-- Header desktop -->
         <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
               <div class="content-topbar flex-sb-m h-full container">
                  <div class="left-top-bar">
                     Selamat datang di toko kami dan selamat berbelanja!
                  </div>
               </div>
            </div>
            <div class="wrap-menu-desktop">
               <nav class="limiter-menu-desktop container">
                  <!-- Logo desktop -->
                  <a href="index.php" class="logo-mobile">
                     <img src="images/icons/20211201_131422.png" alt="IMG-LOGO">
                  </a>
                  <!-- Menu desktop -->
                  <div class="menu-desktop">
                     <ul class="main-menu">
                        <li class="active-menu">
                           <a href="index.php">Beranda</a>
                        </li>

                        <li>
                           <a href="product.php">Produk</a>
                        </li>

                        <li>
                           <a href="about.php">Tentang Kami</a>
                        </li>

                        <li>
                           <a href="contact.php">Kontak Kami</a>
                        </li>
                     </ul>
                  </div>

                  <!-- Icon header -->
                  <div class="wrap-icon-header flex-w flex-r-m">
                     <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                     </div>
                  </div>
               </nav>
            </div>
         </div>

         <!-- Header Mobile -->
         <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
               <a href="index.php"><img src="images/icons/20211201_131422.png" alt="IMG-LOGO" /></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
               <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                  <i class="zmdi zmdi-search"></i>
               </div>
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
                  <a href="index.php">Beranda</a>
               </li>

               <li>
                  <a href="product.php">Produk</a>
               </li>

               <li>
                  <a href="about.php">Tentang Kami</a>
               </li>

               <li>
                  <a href="contact.php">Kontak Kami</a>
               </li>
            </ul>
         </div>

         <!-- Modal Search -->
         <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
               <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                  <img src="images/icons/icon-close2.png" alt="CLOSE">
               </button>

               <form class="wrap-search-header flex-w p-l-15" action="product.php">
                  <button class="flex-c-m trans-04">
                     <i class="zmdi zmdi-search"></i>
                  </button>
                  <input class="plh3" type="text" name="search" placeholder="Cari Produk.." autocomplete="off">
               </form>
            </div>
         </div>
      </header>

      <!-- Slider -->
      <section class="section-slide">
         <div class="wrap-slick1">
            <div class="slick1">
               <div class="item-slick1" style="background-image: url(images/slide1.png)">
                  <div class="container h-full">
                     <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                           <span class="ltext-101 cl2 respon2"> Tenun Datar dan Songket </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                           <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1"> Perempuan </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                           <a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"> Belanja </a>
                        </div>
                     </div>
                  </div>  
               </div>

               <div class="item-slick1" style="background-image: url(images/slide2.png)">
                  <div class="container h-full">
                     <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                           <span class="ltext-101 cl2 respon2"> Tenun Datar dan Songket </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                           <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1"> Laki-laki </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                           <a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"> Belanja </a>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </section>

      <!-- about -->
      <section class="bg0 p-t-170">
         <div class="container">
            <div class="row p-b-25">
               <div class="col-md-7 col-lg-7">
                  <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                     <h3 class="mtext-111 cl2 p-b-16">Latar Belakang</h3>

                     <p class="stext-113 cl6 p-b-20">
                        Dusun Mengilok, Desa Batujai, Kabupaten Lombok Tengah, merupakan dusun pengrajin tenun khas Lombok. Pengrajin tenun yang sebagian besar adalah Ibu Rumah Tangga, mengalami kesulitan dalam pemasaran produk tenun yang dihasilkan.  
                     </p>

                     <p class="stext-113 cl6 p-b-26">
                        Sasak Sensek merupakan media penjualan untuk membantu peningkatan ekonomi pengrajin tenun yang sekaligus sebagai tempat pemberdayaan perempuan dan pelestarian budaya dengan mempertahankan filosofi tenun yang kental. Filosofi Songket Subanale merupakan motif...
                     </p>
                        
                     <div class="flex-w p-b-40">
                        <a href="about.php" class="flex-c-m bor4 stext-103 cl2 size-105 bg2 bor2 hov-btn1 p-lr-20 trans-04"> Selengkapnya </a>
                     </div>

                     

                  </div>
               </div>
               <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                  <div class="how-bor1">
                     <div class="hov-img0">
                        <img src="images/tentang1.jpg" alt="IMG" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      

      <!-- Product -->
      <section class="bg0 p-t-170">
         <div class="container">
            <div class="p-b-45">
               <h3 class="ltext-106 cl5 txt-center">Produk Terbaru</h3>
            </div>

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
                  <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                     <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                     <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                     Cari
                  </div>
               </div>

               <!-- Search product -->
               <div class="dis-none panel-search w-full p-t-10 p-b-15">
                  <form action="product.php">
                     <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                           <i class="zmdi zmdi-search"></i>
                        </button>
                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search" placeholder="Cari produk.." autocomplete="off">
                     </div>	
                  </form>
               </div>
            </div>

            <div class="row isotope-grid">

            <?php 
            $query = "SELECT * FROM tb_produk ORDER BY id_produk DESC LIMIT 8";
            $result = mysqli_query( $mysqli, $query );
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
                        >
                           Rincian
                        </a>  
                     </div>



                     <div class="block2-txt flex-w flex-t p-t-14 p-lr-2">
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
            <div class="flex-c-m flex-w w-full p-t-15">
               <a href="product.php" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04"> LEBIH BANYAK </a>
            </div>
         </div>
      </section>
      <!-- Product -->
      <section class="bg0 p-t-170 p-b-100">
         <div class="container">
            <div class="flex-w flex-tr">
               <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                  <form method="post" action="send.php">
                     <h5 class="mtext-105 cl2 txt-center p-b-30">Kirim Pesan Ke Whatsapp</h5>

                     <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-28 p-r-30" type="text" name="nama" placeholder="Nama Anda" autocomplete="off" />
                     </div>

                     <div class="bor8 m-b-30">
                        <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="pesan" placeholder="Apa Yang Bisa Kami Bantu?"></textarea>
                     </div>
                     
                     <input type="hidden" name="nomor" value="6287857097230">

                     <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" type="submit" name="submit">Kirim</button>
                  </form>
               </div>

               <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                  <div class="flex-w w-full p-b-42">
                     <span class="fs-18 cl5 txt-center size-211">
                        <i class="fa fa-map-marker"></i>
                     </span>

                     <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2"> Alamat </span>

                        <p class="stext-115 cl6 size-213 p-t-18"><?= $kontak['alamat']; ?></p>
                     </div>
                  </div>

                  <div class="flex-w w-full p-b-42">
                     <span class="fs-18 cl5 txt-center size-211">
                        <i class="fa fa-phone"></i>
                     </span>

                     <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2"> Telepon </span>

                        <p class="stext-115 cl1 size-213 p-t-18"><?= $kontak['telepon']; ?></p>
                     </div>
                  </div>

                  <div class="flex-w w-full">
                     <span class="fs-18 cl5 txt-center size-211">
                        <i class="fa fa-envelope"></i>
                     </span>

                     <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2"> Email </span>

                        <p class="stext-115 cl1 size-213 p-t-18"><?= $kontak['email']; ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Footer -->
      <footer class="bg3 p-t-75 p-b-32">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-lg-4 p-b-50">
                  <h4 class="stext-301 cl0 p-b-25">Siapa Kami?</h4>

                  <p class="stext-107 cl7 size-201">Kami memproduksi kain tenun tradisional beserta produk turunannya dan memproduksi pakaian adat sasak komplit</p>

               </div>

               <div class="col-sm-6 col-lg-4 p-b-50">
                  <h4 class="stext-301 cl0 p-b-25">Hubungi Kami</h4>

                  <ul>
                     
                     <li class="p-b-10">
                        <span class="stext-107 cl7 size-201">
                           <i class="bi bi-telephone m-r-2"> <?= $kontak['telepon']; ?></i>
                        </span>
                     </li>
                     
                     <li class="p-b-10">
                        <span class="stext-107 cl7 size-201">
                           <i class="bi bi-envelope m-r-2"></i> <?= $kontak['email']; ?>
                        </span>
                     </li>

                     <li class="p-b-10">
                        <span class="stext-107 cl7 size-201">
                           <i class="bi bi-geo-alt m-r-2"></i> <?= $kontak['alamat']; ?>
                        </span>
                     </li>
                  </ul>
               </div>

               <div class="col-lg-1">

               </div>

               <div class="col-sm-6 col-lg-3 p-b-25">
                  <h4 class="stext-301 cl0 p-b-30">Ikuti Kami</h4>

                  <ul>
                     <li class="p-b-10">
                        <a href="https://www.facebook.com/profile.php?id=100075187163923" target="_blank" class="stext-107 cl7 hov-cl1 trans-04"> <i class="bi bi-facebook"></i> Sasak Sensek </a>
                     </li>

                     <li class="p-b-10">
                        <a href="https://www.instagram.com/sasksensek/" target="_blank" class="stext-107 cl7 hov-cl1 trans-04"> <i class="bi bi-instagram"></i> @sasksensek </a>
                     </li>

                     <li class="p-b-10">
                        <a href="https://vt.tiktok.com/ZSeDRUN1x/" target="_blank" class="stext-107 cl7 hov-cl1 trans-04"> <i class="bi bi-tiktok"></i> @sasaksensek </a>
                     </li>
                  </ul>
               </div>

            </div>

            <div class="">
               <p class="stext-107 cl7 hov-cl1 trans-04 txt-center">
                  <a href="https://tokopedia.com/sasaks" target="_blank" class="m-r-15"><img src="images/tokped.svg" width="50px" alt=""></a>
                  <a href="https://m.bukalapak.com/u/sasak_sensek_12329" target="_blank"><img src="images/bukalapak.svg" width="50px" alt=""></a>
               </p>
            </div>

            <div class="p-t-40">

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

                        <h4 class="mtext-105 cl2 js-name-detail p-b-14" id="nama"></h4>

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
                                    <div class="how-pos2 p-lr-8-md">
                                       <p class="stext-102 cl6" id="deskripsi">
                                       </p>
                                    </div>
                                 </div>

                                 <!-- - -->
                                 <div class="tab-pane fade" id="information" role="tabpanel">
                                    <div class="row">
                                       <div class="col-sm-11 m-lr-auto">
                                          <ul class="p-lr-12 p-lr-15-sm">
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
                           <a id="pesan" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" href="" target="_blank">
                              <i class="fa fa-whatsapp m-r-5"></i> Pesan Sekarang
                           </a>
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
               $('#pesan').attr('href', 'https://api.whatsapp.com/send?phone=6287857097230&text=Hai%20kak,%0D%0Asaya%20tertarik%20dengan%20' + nama + '%20yang%20harganya%20Rp%20' + harga);
               $('#deskripsi').text(deskripsi);
            })
         })
      </script>
      <!--===============================================================================================-->
      <script src="js/main.js"></script>
   </body>
</html>
