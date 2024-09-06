<?php
$query = "INSERT INTO db_register VALUES('$name','$email','$phone','$address','$country','$card','$security','$name_card', '$buy_it')";
mysqli_query($koneksi, $query);
?>