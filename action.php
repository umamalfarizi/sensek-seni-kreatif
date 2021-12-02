<?php 

require_once('dashboard/connection.php');

// get data
$id = $_GET['id_produk'];

$query = "SELECT * FROM tb_produk WHERE id_produk = {$id}";
$result = mysqli_query($mysqli, $query);
foreach( $result as $produk ) {
   $nama = $produk['nama'];
   $harga = $produk['harga'];
}

header('Location: https://api.whatsapp.com/send?phone=6287857097230&text=Hai%20kak%0D%0ASaya%20tertarik%20dengan%20$nama%20yang%20harganya%20$harga')



?>