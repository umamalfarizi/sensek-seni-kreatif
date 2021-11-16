<?php

require_once("connection.php");
require_once("session_check.php");
if( $sessionStatus == false ) {
    header( 'location: product.php');
}

// Mendapatkan data Id produk
if ( isset($_GET["id_produk"]) ) $id = $_GET["id_produk"];
else {
    echo " Id produk tidak ditemmukan! <a href=product.php'>Kembali</a>";
    exit();
}

$tes= mysqli_query( $mysqli, "SELECT * FROM tb_produk WHERE id_produk = '{$id}'" );
foreach( $tes as $t ) {
    $t['foto'];
}

// Query Get Data produk
$query = "DELETE FROM tb_produk WHERE id_produk = '{$id}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

if ( ! $result ) {
    echo ("Gagal menghapus data!");
}
else{
    unlink( $t['foto']);
   echo "
    <script>
        alert('Data berhasil dihapus');
        window.location.href = 'product.php';
    </script>
    ";
}

?>