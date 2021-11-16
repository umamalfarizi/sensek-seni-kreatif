<?php

require_once ("connection.php");

// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['nama']) ) $nama = htmlspecialchars( ucwords($_POST['nama']) );
else $error = 1;

if ( isset($_POST['kategori']) ) $id_kategori = $_POST['kategori'];
else $error = 1;

if ( isset($_POST['jenis_aksesoris']) ) $id_jenis_aksesoris = $_POST['jenis_aksesoris'];
else $error = 1;

if ( isset($_POST['motif']) ) $motif = htmlspecialchars( ucwords($_POST['motif']) );
else $error = 1;

if ( isset($_POST['harga']) ) $harga = $_POST['harga'];
else $error = 1;

if ( isset($_POST['stok']) ) $stok = $_POST['stok'];
else $error = 1;

if ( isset($_POST['deskripsi']) ) $deskripsi = htmlspecialchars( $_POST['deskripsi'] );
else $error = 1;

// Mengatasi jika terjadi error pada input
if ( $error == 1 )  {
   echo "Terjadi kesalahan pada proses input data";
   exit();
}



// Mengambil data file upload
$files = $_FILES['foto'];
$path = "penyimpanan/";

// Menangani file upload
if ( !empty($files['name']) ) {
   $filepath = $path . $files["name"];
   $upload = move_uploaded_file($files["tmp_name"], $filepath);
}
else {
   $filepath = "";
   $upload = false;
}

// Menangani error saat mengupload
if ( $upload != true && $filepath != "") {
   echo "Gagal meng-upload file <a href='insert_product.php'>Kembali</a>";
   exit();
}

// Menyiapkan Query MySQL untuk dieksekusi
$query = 
   " INSERT INTO tb_produk
   (id_kategori, nama, foto, id_jenis_aksesoris, motif, harga, stok, deskripsi)
   VALUES
   ('{$id_kategori}', '{$nama}', '{$filepath}', '{$id_jenis_aksesoris}', '{$motif}', '{$harga}', '{$stok}', '{$deskripsi}');";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani ketika ada error pada saat eksekusi query
if ( $insert == false ) {
    echo "Error dalam menambahkan data. <a href ='insert_product.php'>Kembali</a>";
}
else {
   echo "
   <script>
      alert('Tambah data berhasil!');
      window.location.href = 'product.php';
   </script>
   ";
}

?>