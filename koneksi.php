<?php
$servername = "localhost";
$database = "db_register";
$name = "root";
$email = "";
$phone = "";

$conn = mysqli_connect($servername, $database, $name, $email, $phone);
if (!$conn){
    die("koneksi Gagal :". mysqli_connect_error());
}else{
    echo "Koneksi berhasil";
}
// $koneksi = mysqli_connect("localhost", "root", "", "db_registrasi");
?>
