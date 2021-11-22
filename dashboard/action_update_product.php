<?php

require_once("connection.php");

// Mendapatkan data id produk
if ( isset($_POST["id_produk"]) ) $id = $_POST["id_produk"];
else {
    echo "id produk tidak Ditemukan! <a href='update_product.php?id_produk?={$id}'></a>";
    exit();
}


// Query Get id produk
$query = "SELECT * FROM tb_produk WHERE id_produk = '{$id}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

// Fetching Data
foreach ( $result as $produk ) {

$id = $produk["id_produk"];
$foto = $produk["foto"];
}

if ( isset($_POST['nama']) ) $nama = htmlspecialchars( ucwords($_POST['nama']) );

if ( isset($_POST['kategori']) ) $id_kategori = $_POST['kategori'];

if ( isset($_POST['jenis_aksesoris']) ) $id_jenis_aksesoris = $_POST['jenis_aksesoris'];

if ( isset($_POST['motif']) ) $motif = htmlspecialchars( ucwords($_POST['motif']) );

if ( isset($_POST['harga']) ) $harga = $_POST['harga'];

if ( isset($_POST['stok']) ) $stok = $_POST['stok'];

if ( isset($_POST['deskripsi']) ) $deskripsi = htmlspecialchars( $_POST['deskripsi'] );

// Mengambil Data File Upload
$files = $_FILES['foto'];
$path = "penyimpanan/";

// Menangani File Upload
if ( !empty($files['name']) ) {
    $filepath = $path . $files["name"];

    $upload = move_uploaded_file($files["tmp_name"], $filepath);

    if ( $upload ) {
        unlink($foto);
    }
}
else {
    $filepath = $foto;
    $upload = false;
}

// Mengangani error saat mengupload
if ( $upload != true && $filepath != $foto ) {
    exit();
}

// Menyiapkan Query MySQL untuk diekseekusi
$query = "UPDATE tb_produk SET
        id_kategori = '{$id_kategori}',
        nama = '{$nama}',
        foto = '{$filepath}',
        id_jenis_aksesoris = '{$id_jenis_aksesoris}',
        motif = '{$motif}',
        harga = '{$harga}',
        stok = '{$stok}',
        deskripsi = '{$deskripsi}'
    WHERE id_produk = '{$id}';";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli,$query);

// Menangani ketika ada error ketika eksekusi query
if ( $insert == false ) {
    echo "Error dalam mengubah data. <a href='update_product.php?id_produk={$id}'>Kembali</a>";
}
else {
    echo "
        <script>
            alert('Ubah data berhasil!');
            window.location.href = 'product.php';
        </script>
    ";
}

?>