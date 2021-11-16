<?php

require_once("connection.php");

// Menapatkan Id produk
if ( isset($_GET["id_produk"]) ) $id = $_GET["id_produk"];
else {
    echo "Id produk Tidak Ditemukan <a href='update_product.php'>Kembali</a>";
    exit();
}

// Query Get id produk
$query = "SELECT * FROM tb_produk WHERE id_produk = '{$id}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

// Fetching Data
foreach ( $result as $produk) {
    $foto = $produk["foto"];
}

if ( !is_null($foto) && !empty($foto) ) {
    $remove = unlink($foto);

    if ( $remove ) {

        // Menyiapkan Query MySQL untuk Dieksekusi
        $query = 
        " UPDATE tb_produk SET 
        foto = NULL
        WHERE id_produk = '{$id}' ";

        // Mengeksekusi Query MySQL
        $insert = mysqli_query($mysqli, $query);
    }

}

header("Location: update_product.php?id_produk={$id}");

?>