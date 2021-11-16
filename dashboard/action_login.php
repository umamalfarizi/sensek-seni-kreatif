<?php

require_once ("connection.php");

// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['email']) ) $email = $_POST['email'];
else $error = 1;

if ( isset($_POST['password']) ) $password = $_POST['password'];
else $error = 1;

// Mengatasi jika terdapat error pada data inputan
if ( $error == 1 )  {
    echo "Terjadi kesalahan pada data inputan <a href='login.php>Kembali</a>'";
    exit();
}

// Hashing Password
$password = hash ("sha256", $password);    

// Menyiapkan Query MySQL untuk dieksekusi
$query = "SELECT * FROM tb_admin WHERE email = '{$email}'";

// Mengeksekusi MySQL Query
$result = mysqli_query($mysqli, $query);

$data = mysqli_fetch_assoc($result); 

if ( is_null($data) ) {
    echo "
        <script>
            alert('Email tidak terdaftar');
            window.location.href = 'login.php';
        </script>
    ";
    exit();
}
else if ( $data['password'] != $password ) {
    echo "
        <script>
            alert('Kata sandi salah!');
            window.location.href = 'login.php';
        </script>
    ";
    exit();
}

else {
    // Memulai fungsi SESSION
    session_start();

    $_SESSION["status"] = true;
    $_SESSION["nama"] = $data["nama"];
    $_SESSION["email"] = $data["email"];
    
    header("Location: index.php");
}


?>