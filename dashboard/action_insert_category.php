<?php

require_once ("connection.php");

// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['nama']) ) $nama = htmlspecialchars( ucwords($_POST['nama']) );
else $error = 1;

// Mengatasi jika terjadi error pada input
if ( $error == 1 )  {
   echo "Terjadi kesalahan pada proses input data";
   exit();
}


// Menyiapkan Query MySQL untuk dieksekusi
$query = 
   " INSERT INTO tb_kategori
   (nama)
   VALUES
   ('{$nama}')";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani ketika ada error pada saat eksekusi query
if ( $insert == false ) {
    echo "Error dalam menambahkan data. <a href ='insert_category.php'>Kembali</a>";
}
else {
   echo "
   <script>
      alert('Tambah data berhasil!');
      window.location.href = 'category.php';
   </script>
   ";
}

?>