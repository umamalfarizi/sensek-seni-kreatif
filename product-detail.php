<?php 

require_once('dashboard/connection.php');

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

// get id
/// Mendapatkan data id
if ( isset($_GET["id_produk"]) ) $id = $_GET["id_produk"];
else header('Location: product.php');

$query = "SELECT * FROM tb_produk WHERE id_produk = '{$id}'";

$result = mysqli_query( $mysqli, $query);

foreach ( $result as $produk) {

   $id_produk = $produk['id_produk'];
   $foto = $produk["foto"];
   $id_kategori = $produk["id_kategori"];
   $nama = $produk["nama"];
   $id_jenis = $produk["id_jenis_aksesoris"];
   $harga = $produk["harga"];
   $stok = $produk["stok"];
   $deskripsi = $produk["deskripsi"];
}


$query2 = "SELECT * FROM tb_kategori WHERE id_kategori = '{$id_kategori}'";

$result2 = mysqli_query( $mysqli, $query2);


foreach ( $result2 as $kategori) {

   $id_kategori = $kategori['id_kategori'];
   $nama2 = $kategori["nama"];
}


$query3 = "SELECT * FROM tb_jenis_aksesoris WHERE id_jenis_aksesoris = '{$id_jenis}'";

$result3 = mysqli_query( $mysqli, $query3);


foreach ( $result3 as $jenis) {

   $id_jenis = $jenis['id_jenis_aksesoris'];
   $nama3 = $jenis["nama"];
}


?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Detail Produk</title>
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
      <header class="header-v4">
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
            <div class="wrap-menu-desktop how-shadow1">
               <nav class="limiter-menu-desktop container">
                  <!-- Logo desktop -->
                  <div class="logo-mobile">
                     <a href="index.php"><img src="images/icons/20211201_131422.png" alt="IMG-LOGO" /></a>
                  </div>

                  <!-- Menu desktop -->
                  <div class="menu-desktop">
                     <ul class="main-menu">
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

               <form class="wrap-search-header flex-w p-l-15">
                  <button class="flex-c-m trans-04">
                     <i class="zmdi zmdi-search"></i>
                  </button>
                  <input class="plh3" type="text" name="search" placeholder="Cari Produk.." autocomplete="off" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>">
               </form>
            </div>
         </div>
      </header>

      <!-- breadcrumb -->
      <div class="container">
         <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
               Beranda
               <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="product.php" class="stext-109 cl8 hov-cl1 trans-04">
               <?= $nama2; ?>
               <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4"> <?= $nama; ?> </span>
         </div>
      </div>

      <!-- Product Detail -->
      <section class="sec-product-detail bg0 p-t-65 p-b-60">
         <div class="container">
            <div class="row">
               <div class="col-md-4 p-b-20">
                  <div class="p-l-35 p-r-25 p-lr-0-lg ">
                     <img src="dashboard/<?= $foto; ?>" alt="IMG-PRODUCT" style="width: 100%;"/>
                  </div>
               </div>

               <div class="col-md-6  p-b-20">
                  <div class="p-r-50 p-t-5 p-lr-0-lg">

                     <h4 class="mtext-105 cl2 js-name-detail p-b-14"><?= $nama; ?></h4>

                     <span class="mtext-106 cl2">Rp <?= number_format($harga); ?></span>

                     <div>
                     <ul class=" m-t-25">
                           <li class="flex-w flex-t p-b-7">
                              <span class="stext-102 cl3 size-205"> Jenis Kain </span>
                           
                              <span class="stext-102 cl6 size-206">: <?= $nama2; ?></span>
                           </li>

                           <li class="flex-w flex-t p-b-7">
                              <span class="stext-102 cl3 size-205"> Aksesoris </span>

                              <span class="stext-102 cl6 size-206">: <?= $nama3; ?></span>
                           </li>

                           <li class="flex-w flex-t p-b-7">
                              <span class="stext-102 cl3 size-205"> Stok </span>

                              <span class="stext-102 cl6 size-206">: <?= $stok; ?></span>
                           </li>
                        </ul>
                     </div>
                     <span class="stext-102 cl3 size-205"> Deskripsi </span>  <span class="m-l-80 stext-102 cl3 size-205">:</span>  <br>

                     <span class="stext-102 cl6 size-206"><?= $deskripsi; ?></span>

                     <div class="p-t-30">
                        <div class="flex-w">
                           <a href="https://api.whatsapp.com/send?phone=6287857097230&text=Hai%20kak%0D%0ASaya%20tertarik%20dengan%20<?= $nama; ?>%20yang%20harganya%20Rp%20<?= number_format($harga); ?>" target="_blank" class="flex-c-m bor4 stext-103 cl2 size-105 bg2 bor2 hov-btn1 p-lr-25 trans-04">
                              <i class="fa fa-whatsapp m-r-5"></i> Pesan Sekarang
                           </a>
                        </div>
                     </div>

                  </div>
               </div>
               <div class="col-lg-1"></div>
            </div>
         </div>

         <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
            <span class="stext-107 cl6 p-lr-25"> Jenis: <?= $nama2; ?> </span>

            <span class="stext-107 cl6 p-lr-25"> Aksesoris: <?= $nama3; ?> </span>
         </div>
      </section>

      <!-- Related Products -->
      <section class="sec-relate-product bg0 p-t-45 p-b-105">
         <div class="container">
            <div class="p-b-45">
               <h3 class="ltext-106 cl5 txt-center">Produk Terkait</h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
               <div class="slick2">

               <?php 
            
                  $query = "SELECT * FROM tb_produk WHERE id_jenis_aksesoris = '{$id_jenis}' AND id_produk != '{$id_produk}'";

                  $result = mysqli_query( $mysqli, $query);


                  foreach ( $result as $produk) :

                     $id_produk = $produk['id_produk'];
                     $foto = $produk["foto"];
                     $id_kategori = $produk["id_kategori"];
                     $nama = $produk["nama"];
                     $id_jenis = $produk["id_jenis_aksesoris"];
                     $harga = $produk["harga"];
                     $stok = $produk["stok"];
                     $deskripsi = $produk["deskripsi"];
                  
                  ?>

                  <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                     <!-- Block2 -->
                     <div class="block2">
                        <div class="block2-pic hov-img0">
                           <img src="dashboard/<?= $foto; ?>" alt="IMG-PRODUCT" />

                           <a href="" id="tes" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1"
                           data-nama="<?= $nama; ?>"
                           data-idkategori="<?php $query="SELECT * FROM tb_kategori WHERE id_kategori = '{$id_kategori}'"; $result=mysqli_query($mysqli, $query); foreach($result as $k){ echo $k['nama']; } ?>"
                           data-idjenisaksesoris="<?php $query="SELECT * FROM tb_jenis_aksesoris WHERE id_jenis_aksesoris = '{$id_jenis}'"; $result=mysqli_query($mysqli, $query); foreach($result as $a){ echo $a['nama']; } ?>"
                           data-foto="<?= $foto; ?>"
                           data-harga="<?= number_format($harga); ?>"
                           data-stok="<?= $stok; ?>"
                           data-deskripsi="<?= $deskripsi; ?>"
                           > Rincian </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                           <div class="block2-txt-child1 flex-col-l">
                              <a href="product-detail.php?id_produk=<?= $id_produk; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"> <?= $nama; ?> </a>

                              <span class="stext-105 cl3"> Rp <?= number_format($harga); ?> </span>
                           </div>
                        </div>
                     </div>
                  </div>

                  <?php endforeach; ?>

               </div>
            </div>
         </div>
      </section>

      <!-- Footer -->
      <footer class="bg3 p-t-75 p-b-32">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-lg-4 p-b-50">
                  <h4 class="stext-301 cl0 p-b-30">Siapa Kami?</h4>

                  <p class="stext-107 cl7 size-201">Kami memproduksi kain tenun tradisional beserta produk turunannya dan memproduksi pakaian adat sasak komplit</p>

               </div>

               <div class="col-sm-6 col-lg-4 p-b-50">
                  <h4 class="stext-301 cl0 p-b-30">Hubungi Kami</h4>

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

               <div class="col-sm-6 col-lg-3 p-b-50">
                  <h4 class="stext-301 cl0 p-b-30">Ikuti Kami</h4>

                  <ul>
                     <li class="p-b-10">
                        <a href="https://www.facebook.com/profile.php?id=100075187163923" target="_blank" class="stext-107 cl7 hov-cl1 trans-04"> <i class="bi bi-facebook"></i> Sasak Sensek </a>
                     </li>

                     <li class="p-b-10">
                        <a href="https://www.instagram.com/sasksensek/" target="_blank" class="stext-107 cl7 hov-cl1 trans-04"> <i class="bi bi-instagram"></i> @sasaksensek </a>
                     </li>

                     <li class="p-b-10">
                        <a href="https://vt.tiktok.com/ZSeDRUN1x/" target="_blank" class="stext-107 cl7 hov-cl1 trans-04"> <i class="bi bi-tiktok"></i> @sasaksensek </a>
                     </li>
                  </ul>
               </div>

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
                              <a id="pesan" class="flex-c-m stext-103 cl2 size-105 bg2 bor4 hov-btn1 p-lr-15 trans-04" href="" target="_blank">
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
         $('.js-addwish-b2, .js-addwish-detail').on('click', function (e) {
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
      <!--===============================================================================================-->
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
      <script src="js/main.js"></script>
   </body>
</html>
