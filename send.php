<?php 

if( isset($_POST['submit']) ) {
   $nama = ucwords($_POST['nama']);
   $pesan = $_POST['pesan'];
   $nomor = $_POST['nomor'];

   header("location: https://api.whatsapp.com/send?phone={$nomor}&text=Nama:%20{$nama}%0D%0APesan:%20{$pesan}");

}
else{
   echo "<script> window.location = history.go(-1); </script>";
}

?>