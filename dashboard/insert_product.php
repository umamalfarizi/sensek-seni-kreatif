<?php 
require_once('connection.php');
require_once ("session_check.php");
if( $sessionStatus == false) {
   header("Location: login.php");
}
?>


<!DOCTYPE html>
<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Admin - Tambah Data Produk</title>

   <!-- Custom fonts for this template -->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="css/sb-admin-2.min.css" rel="stylesheet">

   <!-- Custom styles for this page -->
   <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

   <script src="vendor/jquery/jquery.min.js"></script>



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
               <div class="sidebar-brand-text mx-3">Seni Kreatif</div>
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
            <hr class="sidebar-divider" />

            <!-- Nav Item - produk -->
            <li class="nav-item active">
               <a class="nav-link" href="product.php">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Data Produk</span>
               </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Nav Item - Kategori -->
            <li class="nav-item">
               <a class="nav-link" href="category.php">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Data Kategori</span>
               </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Nav Item - jenis aksesoris -->
            <li class="nav-item">
               <a class="nav-link" href="accessories.php">
                  <i class="fas fa-fw fa-table"></i>
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

                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <h5 class="m-0 font-weight-bold text-primary">Tambah Data Produk</h5>
                        </div>
                        <div class="card-body">
                           <div class="p-1">
                              <form action="action_insert_product.php" method="post" enctype="multipart/form-data">
                                 <div class="form-group p-2 mb-3 shadow-sm">
                                    <label for="foto">Foto</label>
                                    <div class="tambah-foto">
                                       <input type="file" id="foto" class="form-control mb-2" name="foto1">
                                     </div>
                                    <span class="btn btn-primary btn-sm btn-tambah">
                                       <i class="fa fa-plus"></i> Tambah Foto
                                    </span>
                                 </div>
                                 <div class="form-group p-2 mb-3 shadow-sm">
                                    <label for="nama">Nama</label>
                                    <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama produk" required>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group p-2 mb-3 shadow-sm">
                                          <?php 
   
                                          $query = "SELECT * FROM tb_kategori";
                                          $kate = mysqli_query($mysqli, $query);
                                          
                                          ?>
                                          <label for="kategori">Kategori</label>
                                          <select class="form-control" aria-label="Default select example" name="kategori" id="kategori" required>
                                                <option>- Pilih kategori -</option>
                                                <?php foreach( $kate as $kategori) : ?>
                                                <option value="<?=$kategori['id_kategori']?>"><?= $kategori['nama']; ?></option>
                                                <?php endforeach; ?>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group p-2 mb-3 shadow-sm">
                                       <?php 
   
                                       $query = "SELECT * FROM tb_jenis_aksesoris";
                                       $jenis = mysqli_query($mysqli, $query);
   
                                       ?>
                                          <label for="jenis_aksesoris">Jenis Aksesoris</label>
                                          <select class="form-control" aria-label="Default select example" name="jenis_aksesoris" id="jenis_aksesoris" required>
                                                <option>- Pilih Jenis -</option>
                                                <?php foreach( $jenis as $jenis_aksesoris) : ?>
                                                <option value="<?=$jenis_aksesoris['id_jenis_aksesoris']?>"><?= $jenis_aksesoris['nama']; ?></option>
                                                <?php endforeach; ?>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group p-2 mb-3 shadow-sm">
                                    <label for="motif">Motif</label>
                                    <input type="text" id="motif" class="form-control" name="motif" placeholder="Motif produk" required>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group p-2 mb-3 shadow-sm">
                                          <label for="harga">Harga (Rp)</label>
                                          <input name="harga" type="number" id="harga" class="form-control" placeholder="Harga produk" required>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group p-2 mb-3 shadow-sm">
                                          <label for="stok">Stok</label>
                                          <input name="stok" type="number" id="stok" class="form-control" placeholder="Stok produk" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group p-2 mb-4 shadow-sm">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi"  class="form-control" cols="30" rows="3" placeholder="Tulis keterangan produk seperti warna, ukuran, kualitas, keunggulan.." required></textarea>
                                 </div>
                                 <div class="text-end">
                                    <input type="submit"  name="submit" value="Tambah" class="btn btn-primary">
                                    <a href="product.php" class="btn border-primary text-primary" style="margin-left: 4px;">Batal</a>
                                 </div>
                              </form>
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



   <script>
      $(document).ready(function(){
         $(".btn-tambah").on("click", function(){
            $(".tambah-foto").append("<input type='file' id='foto' class='form-control mb-2' name='foto[]'>");
         });
      });
   </script>

   <!-- Bootstrap core JavaScript-->
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->
   <script src="vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

   <!-- Page level custom scripts -->
   <script src="js/demo/datatables-demo.js"></script>

</body>

</html>