<?php

require_once("connection.php");
require_once("session_check.php");
if( $sessionStatus == false ) {
    header( 'Location: category.php');
    die();
}

// Mendapatkan data Id kategori
if ( isset($_GET["id_kategori"]) ) $id = $_GET["id_kategori"];
else {
    echo " Id kategori tidak ditemmukan! <a href=category.php'>Kembali</a>";
    exit();
}

// Query Get Data Kategori
$query = "DELETE FROM tb_kategori WHERE id_kategori = '{$id}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

if ( ! $result ) {
    echo ("Gagal menghapus data!");
}
else{
   echo "
    <script>
        alert('Data berhasil dihapus');
        window.location.href = 'category.php';
    </script>
    ";
}

?>