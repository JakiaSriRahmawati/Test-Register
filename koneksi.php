<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_register1";

$conn = new mysqli($servername,$username,$password,$database);
if (!$conn){
    die("koneksi Gagal :". mysqli_connect_error());
}

?>