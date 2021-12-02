<?php 

require_once('connection.php');

require_once('session_check.php');
if( $sessionStatus == false) {
   header('Location: login.php');
}

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
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />

      <title>Admin - SEO Dan Kontak</title>

      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet" />
   </head>

   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center my-3" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3"> SB Admin <sup>2</sup> </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dasbor</span>
            </a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Kategori -->
            <li class="nav-item">
            <a class="nav-link" href="category.php">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Data Kategori</span>
            </a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - produk -->
            <li class="nav-item">
            <a class="nav-link" href="product.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Produk</span>
            </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - jenis aksesoris -->
            <li class="nav-item">
            <a class="nav-link" href="accessories.php">
                <i class="fas fa-fw fa-clipboard-list"></i>
                <span>Data Jenis Aksesoris</span>
            </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />


            <!-- Nav Item - Tentang Kami -->
            <li class="nav-item active">
            <a class="nav-link" href="us.php">
                <i class="fas fa-fw fa-wrench"></i>
                <span>SEO dan Kontak</span>
            </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                     <i class="fa fa-bars"></i>
                  </button>

                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $sessionName; ?></span>
                        <img class="img-profile rounded-circle" src="penyimpanan/profile.jpg" />
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#daftarModal">
                            <i class="fas fa-user-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                            Daftarkan Admin
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Keluar
                        </a>
                        </div>
                    </li>
                  </ul>
               </nav>
               <!-- End of Topbar -->

               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <div class="row">
                  <div class="col-lg-6">
                        <div class="card shadow mb-4">
                           <div class="card-header py-3">
                              <h5 class="m-0 font-weight-bold text-primary">SEO (Search Engine Optimization)</h5>
                           </div>
                           <div class="card-body">
                              <div class="p-1">
                                 <form action="action_seo.php" method="post">
                                    <div class="form-group mb-3">
                                       <label for="author">Author</label>
                                       <input type="text" id="author" class="form-control" name="author" value="<?= $seo['author']; ?>" autocomplete="off">
                                    </div>
                                    <div class="form-group mb-3">
                                       <label for="description">Description</label>
                                       <textarea name="description" id="description" class="form-control" cols="30" rows="3"><?= $seo['description']; ?></textarea>
                                    </div>
                                    <div class="form-group mb-3 ">
                                       <label for="keywords">Keywords</label>
                                       <textarea name="keywords" id="keywords" class="form-control" cols="30" rows="3"><?= $seo['keywords']; ?></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                       <label>Robot Index</label>
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="robot_index"  id="index" value="1" <?= ($seo['robot_index']==1) ? "checked" : ""; ?> />
                                          <label class="form-check-label" for="index" >Index</label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="robot_index"  id="no_index" value="0" <?= ($seo['robot_index']==0) ? "checked" : ""; ?> />
                                          <label class="form-check-label" for="no_index" >No-Index</label>
                                       </div>
                                    </div>
                                    <div class="form-group mb-4">
                                       <label>Robot Follow</label>
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="robot_follow"  id="follow" value="1" <?= ($seo['robot_follow']==1) ? "checked" : "" ; ?> />
                                          <label class="form-check-label" for="follow" >Follow</label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="robot_follow"  id="no_follow" value="0" <?= ($seo['robot_follow']==0) ? "checked" : "" ; ?> />
                                          <label class="form-check-label" for="no_follow" >No-Follow</label>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="card shadow mb-4">
                           <div class="card-header py-3">
                              <h5 class="m-0 font-weight-bold text-primary">Kontak Kami</h5>
                           </div>
                           <div class="card-body">
                              <div class="p-1">
                                 <form action="action_contact.php" method="post">
                                    <div class="form-group mb-3">
                                       <label for="telepon">Nomor Telepon</label>
                                       <input type="text" id="telepon" class="form-control" name="telepon" value="<?= $kontak['telepon']; ?>" autocomplete="off">
                                    </div>
                                    <div class="form-group mb-3">
                                       <label for="email">Email</label>
                                       <input type="email" id="email" class="form-control" name="email" value="<?= $kontak['email']; ?>" autocomplete="off">
                                    </div>
                                    <div class="form-group mb-3">
                                       <label for="alamat">Alamat</label>
                                       <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="3"><?= $kontak['alamat']; ?></textarea>
                                    </div>
                                    <div class="form-group mb-4">
                                       <label for="link_gmaps">Link Google Maps</label>
                                       <input type="text" id="link_gmaps" class="form-control" name="link_gmaps" value="<?= $kontak['link_gmaps']; ?>" autocomplete="off">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>Copyright &copy; Seni Kreatif 2021</span>
                  </div>
               </div>
            </footer>
            <!-- End of Footer -->
         </div>
         <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
         <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan tombol Logout di bawah untuk mengakhiri sesi anda.</div>
                <div class="modal-footer">
                    <button class="btn border-primary text-primary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="action_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


   <!-- Daftar Modal-->
   <div class="modal fade" id="daftarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <form action="action_register2.php" method="post">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Daftarkan Admin Baru</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="form-group mb2">
                     <label for="nama">Nama Lengkap</label>
                     <input type="text" id="nama" class="form-control" name="nama" required>
               </div>
               <div class="form-group mb2">
                     <label for="email">Alamat Email</label>
                     <input type="email" id="email" class="form-control" name="email" required>
               </div>
               <div class="form-group mb2">
                     <label for="password">Kata Sandi</label>
                     <input type="password" id="password" class="form-control" name="password" required>
               </div>
               <div class="form-group mb2">
                     <label for="re-password">Kata Sandi</label>
                     <input type="password" id="re-password" class="form-control" name="re-password" required>
               </div>
            </div>
            <div class="modal-footer">
               <button class="btn border-primary text-primary" type="button" data-dismiss="modal">Keluar</button>
               <input type="submit" value="Daftar" class="btn btn-primary">
            </div>
            </form>
         </div>
      </div>
   </div>

   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->
   <script src="vendor/chart.js/Chart.min.js"></script>

   <!-- Page level custom scripts -->
   <script src="js/demo/chart-area-demo.js"></script>
   <script src="js/demo/chart-pie-demo.js"></script>
   
   </body>
</html>
