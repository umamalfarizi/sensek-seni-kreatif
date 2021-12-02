<?php

require_once ("connection.php");

$query = "SELECT * FROM tb_ecommerce";
$result = mysqli_query( $mysqli, $query );
$data = mysqli_fetch_assoc($result);


// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['facebook']) ) $facebook = $_POST['facebook'];
else $error = 1;

if ( isset($_POST['instagram']) ) $instagram = $_POST['instagram'];
else $error = 1;

if ( isset($_POST['tiktok']) ) $tiktok = $_POST['tiktok'];
else $error = 1;

if ( isset($_POST['tokopedia']) ) $tokopedia = $_POST['tokopedia'];
else $error = 1;

if ( isset($_POST['shopee']) ) $shopee = $_POST['shopee'];
else $error = 1;

if ( isset($_POST['bukalapak']) ) $bukalapak = $_POST['bukalapak'];
else $error = 1;

// Mengatasi jika terjadi error pada input
if ( $error == 1 )  {
   echo "Terjadi kesalahan pada proses input data";
   exit();
}

if( !is_null($data)) {
   $query = "UPDATE tb_ecommerce SET facebook = '{$facebook}', instagram = '{$instagram}', tiktok = '{$tiktok}', tokopedia = '{$tokopedia}',  shopee = '{$shopee}',  bukalapak = '{$bukalapak}'";
   $ecommerce = mysqli_query($mysqli, $query);
}
else {
   $query = "INSERT INTO tb_ecommerce VALUES ('{$facebook}', '{$instagram}', '{$tiktok}', '{$tokopedia}', '{$shopee}', '{$bukalapak}')";
   $ecommerce = mysqli_query($mysqli, $query);
}

// Menangani ketika ada error pada saat eksekusi query
if ( $ecommerce == false ) {
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