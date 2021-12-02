<?php

require_once ("connection.php");

$query = "SELECT * FROM tb_kontak";
$result = mysqli_query( $mysqli, $query );
$data = mysqli_fetch_assoc($result);


// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['telepon']) ) $telepon = $_POST['telepon'];
else $error = 1;

if ( isset($_POST['email']) ) $email = $_POST['email'];
else $error = 1;

if ( isset($_POST['alamat']) ) $alamat = $_POST['alamat'];
else $error = 1;

if ( isset($_POST['link_gmaps']) ) $link_gmaps = $_POST['link_gmaps'];
else $error = 1;

// Mengatasi jika terjadi error pada input
if ( $error == 1 )  {
   echo "Terjadi kesalahan pada proses input data";
   exit();
}

if( !is_null($data)) {
   $query = "UPDATE tb_kontak SET telepon = '{$telepon}', email = '{$email}', alamat = '{$alamat}', link_gmaps = '{$link_gmaps}'";
   $kontak = mysqli_query($mysqli, $query);
}
else {
   $query = "INSERT INTO tb_kontak VALUES ('{$telepon}', '{$email}', '{$alamat}', '{$link_gmaps}')";
   $kontak = mysqli_query($mysqli, $query);
}

// Menangani ketika ada error pada saat eksekusi query
if ( $kontak == false ) {
    echo "
    <script>
         alert('Gagal mengubah data!');
         window.location.href = 'us.php';
   </script>"
   ;
}
else {
   echo "
   <script>
      alert('Berhasil Memperbarui Data!');
      window.location.href = 'us.php';
   </script>
   ";
}

?>