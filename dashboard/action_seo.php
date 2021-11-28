<?php

require_once ("connection.php");
$query = "SELECT * FROM tb_seo";
$result = mysqli_query( $mysqli, $query );
$data = mysqli_fetch_assoc($result);

// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['author']) ) $author = $_POST['author'];
else $error = 1;

if ( isset($_POST['description']) ) $description = $_POST['description'];
else $error = 1;

if ( isset($_POST['keywords']) ) $keywords = $_POST['keywords'];
else $error = 1;

if ( isset($_POST['robot_index']) ) $robot_index = $_POST['robot_index'];
else $error = 1;

if ( isset($_POST['robot_follow']) ) $robot_follow = $_POST['robot_follow'];
else $error = 1;

// Mengatasi jika terjadi error pada input
if ( $error == 1 )  {
   echo "Terjadi kesalahan pada proses input data";
   exit();
}

if( !is_null($data)) {
   $query = "UPDATE tb_seo SET author = '{$author}', description = '{$description}', keywords = '{$keywords}', robot_index = {$robot_index}, robot_follow = {$robot_follow}";
   $seo = mysqli_query($mysqli, $query);
}
else {
   $query = "INSERT INTO tb_seo VALUES ('{$author}', '{$description}', '{$keywords}', {$robot_index}, {$robot_follow})";
   $seo = mysqli_query($mysqli, $query);
}

// Menangani ketika ada error pada saat eksekusi query
if ( $seo == false ) {
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