<?php

require_once("connection.php");

// Mendapatkan data id jenis_aksesoris
if ( isset($_POST["id_jenis_aksesoris"]) ) $id = $_POST["id_jenis_aksesoris"];
else {
    echo "id jenis_aksesoris tidak Ditemukan! <a href='update_accessories.php?id_jenis_aksesoris?={$id}'></a>";
    exit();
}

if ( isset($_POST['nama']) ) $nama = htmlspecialchars( ucwords($_POST['nama']) );

// Menyiapkan Query MySQL untuk diekseekusi
$query = "UPDATE tb_jenis_aksesoris SET
        nama = '{$nama}'
    WHERE id_jenis_aksesoris = '{$id}';";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli,$query);

// Menangani ketika ada error ketika eksekusi query
if ( $insert == false ) {
    echo "Error dalam mengubah data. <a href='update_accessories.php?id_jenis_aksesoris={$id}'>Kembali</a>";
}
else {
    echo "
        <script>
            alert('Ubah data berhasil!');
            window.location.href = 'accessories.php';
        </script>
    ";
}

?>