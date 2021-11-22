<?php

require_once("connection.php");
require_once("session_check.php");
if( $sessionStatus == false ) {
    header( 'Location: accessories.php');
    die();
}

// Mendapatkan data Id jenis_aksesoris
if ( isset($_GET["id_jenis_aksesoris"]) ) $id = $_GET["id_jenis_aksesoris"];
else {
    echo " Id jenis_aksesoris tidak ditemmukan! <a href=accessories.php'>Kembali</a>";
    exit();
}

// Query Get Data jenis_aksesoris
$query = "DELETE FROM tb_jenis_aksesoris WHERE id_jenis_aksesoris = '{$id}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

if ( ! $result ) {
    echo ("Gagal menghapus data!");
}
else{
   echo "
    <script>
        alert('Data berhasil dihapus');
        window.location.href = 'accessories.php';
    </script>
    ";
}

?>