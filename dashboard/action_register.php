<?php

require_once ("connection.php");

// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['nama']) ) $nama = htmlspecialchars( ucwords($_POST['nama']) );
else $error = 1;

if ( isset($_POST['email']) ) $email = htmlspecialchars( $_POST['email'] );
else $error = 1;

if ( isset($_POST['password']) ) $password = $_POST['password'];
else $error = 1;

if ( isset($_POST['re-password']) ) $repassword = $_POST['re-password'];
else $error = 1;

// Mengatasi jika terjadi error pada inputan
if ( $error == 1 )  {
    echo 
        "<script>
            alert('terjadi kesalahan pada proses input data data!');
            document.location.href = 'registration.php';
        </script>";
    exit();
}

// Pengecekan Password dan konfirmasi password
if ( $password != $repassword ) {
    echo 
        "<script>
            alert('Kondirmasi password salah!');
            document.location.href = 'registration.php';
        </script>";
    exit();
}
else {
    $password = hash ("sha256", $password);    
}

// Menyiapkan Query MySQL untuk dieksekusi
$query = "
    INSERT INTO tb_admin
    (nama, email, password)
    VALUES
    ('{$nama}', '{$email}', '{$password}');
";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani ketika ada error pada saat eksekusi query
if ( $insert == false ) {
    echo
        "<script>
            alert('Error dalam menambahkan data!');
            document.location.href = 'registration.php';
        </script>";
    exit();
}
else {
    echo
        "<script>
            alert('Daftar admin berhasil!');
            document.location.href = 'index.php';
        </script>";
}

?>