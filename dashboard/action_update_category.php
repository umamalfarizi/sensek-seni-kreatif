<?php

require_once("connection.php");

// Mendapatkan data id kategori
if ( isset($_POST["id_kategori"]) ) $id = $_POST["id_kategori"];
else {
    echo "id kategori tidak Ditemukan! <a href='update_category.php?id_kategori?={$id}'></a>";
    exit();
}

if ( isset($_POST['nama']) ) $nama = htmlspecialchars( ucwords($_POST['nama']) );

// Menyiapkan Query MySQL untuk diekseekusi
$query = "UPDATE tb_kategori SET
        nama = '{$nama}'
    WHERE id_kategori = '{$id}';";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli,$query);

// Menangani ketika ada error ketika eksekusi query
if ( $insert == false ) {
    echo "Error dalam mengubah data. <a href='update_category.php?id_kategori={$id}'>Kembali</a>";
}
else {
    echo "
        <script>
            alert('Ubah data berhasil!');
            window.location.href = 'category.php';
        </script>
    ";
}

?>