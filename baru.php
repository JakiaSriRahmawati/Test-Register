<?php
require 'koneksi.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$country = $_POST['country'];
$card = $_POST['card'];
$security = $_POST['security'];
$name_card = $_POST['name_card'];


$query_sql = "INSERT INTO user (name, email, phone, address, country, card, security, name_card,)
    VALUES ('$name', '$email', '$phone', '$address', '$country', '$card', '$security', '$name_card')";
if(mysqli_query($conn, $query_sql)) {
    header("Location: tabel.php");
}else{ 
    echo "pendaftaran Gagal : " . mysqli_error($conn);
}
?>