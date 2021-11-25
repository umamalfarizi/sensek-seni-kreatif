<?php 
require_once('connection.php');

require_once('session_check.php');
if( $sessionStatus == false) {
   header('Location: login.php');
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

      <title>Admin - Dasbor</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3"> SB Admin <sup>2</sup> </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dasbor</span>
            </a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Nav Item - Kategori -->
            <li class="nav-item">
            <a class="nav-link" href="category.php">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Data Kategori</span>
            </a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Nav Item - produk -->
            <li class="nav-item">
            <a class="nav-link" href="product.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Produk</span>
            </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Nav Item - jenis aksesoris -->
            <li class="nav-item">
            <a class="nav-link" href="accessories.php">
                <i class="fas fa-fw fa-clipboard-list"></i>
                <span>Data Jenis Aksesoris</span>
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
                  <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                     <h1 class="h3 mb-0 text-gray-800">Selamat Datang, <?= $sessionName; ?> !</h1>
                  </div>

                  <!-- Content Row -->
                  <div class="row">

                     <!-- Earnings (Monthly) Card Example -->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="font-weight-bold text-warning text-uppercase mb-1">
                                       Kategori</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                       <?php 
                                          $query = "SELECT COUNT(id_kategori) FROM tb_kategori";
                                          $result = mysqli_query($mysqli, $query);
                                          foreach( $result as $data ) {
                                             echo $data["COUNT(id_kategori)"];
                                          }
                                       ?>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                    <i class="fas fa-list-alt fa-2x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Earnings (Monthly) Card Example -->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="font-weight-bold text-primary text-uppercase mb-1">
                                       Jumlah Produk</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                       <?php 
                                          $query = "SELECT COUNT(id_produk) FROM tb_produk";
                                          $result = mysqli_query($mysqli, $query);
                                          foreach( $result as $data ) {
                                             echo $data["COUNT(id_produk)"];
                                          }
                                       ?>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                    <i class="fas fa-table fa-2x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Pending Requests Card Example -->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="font-weight-bold text-success text-uppercase mb-1">
                                       Jenis Aksesoris</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                       <?php 
                                          $query = "SELECT COUNT(id_jenis_aksesoris) FROM tb_jenis_aksesoris";
                                          $result = mysqli_query($mysqli, $query);
                                          foreach( $result as $data ) {
                                             echo $data["COUNT(id_jenis_aksesoris)"];
                                          }
                                       ?>
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                 </div>
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
