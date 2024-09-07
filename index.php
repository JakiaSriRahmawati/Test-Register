<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari input form
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $phone = $_POST['phone'];
    // $address = $_POST['address'];
    // $country = $_POST['country'];
    // $card = $_POST['card'];
    // $security = $_POST['security'];
    // $name_card = $_POST['name_card'];
    // $buy_it = $_POST['buy_it'];

    // Lakukan validasi atau proses lainnya
//     echo "Data berhasil dikirim!<br>";
//     echo "Nama: $name<br>";
//     echo "Email: $email<br>";
//     echo "Telepon: $phone<br>";
//     echo "Alamat: $address<br>";
//     echo "Negara: $country<br>";
//     echo "Nomor Kartu: $card<br>";
//     echo "Kode Keamanan: $security<br>";
//     echo "Nama di Kartu: $name_card<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Registrasi</title>
    <style>
         .column {
            width: 200px;
            height: 150px;
            border: 1px solid #000;
            padding: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Your Details</legend>
    <form action="koneksi.php" method="post">
        <ul>
                <p>1. <label for="nama">Name :</label>
                <input type="text" id="nama" name="nama" placeholder="Enter your name" required>
                <p>2.<label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <p>3.<label for="phone">Phone :</label>
                <input type="number" id="phone" name="phone" placeholder="Enter your phone ">
        </ul>
    </form>
    </fieldset>
    <fieldset>
    <legend>Delivery address</legend>
    <form action="" method="post">
        <ul>
                <p>1.<label for="address">Address :</label>
                <textarea type="text" id="nama" name="address" placeholder="Enter your address"></textarea>
                <p>2.<label for="post-code">Post code :</label>
                <input type="text" id="post-code" name="post-code" placeholder="Enter your post code">
                <p>3.<label for="country">Country :</label>
                <select name="card" id="card">
                <option value="indonesia">Indonesia</option>
                <option value="india">India</option>
                <option value="irlandia">Irlandia</option>
                </select>
        </ul>
    </form>
    </fieldset>
    <fieldset>
    <legend>Card Details</legend>
    <form action="" method="post">
        <ul>
        <p>1.<label for="card" >Card type:</label>
        <div>
            <input type="radio" id="visa" name="card_type" value="visa">
            <label for="visa" required>VISA</label>
        </div>
        <div>
            <input type="radio" id="amex" name="card_type" value="amex">
            <label for="amex">AmEx</label>
        </div>
        <div>
            <input type="radio" id="mastercard" name="card_type" value="mastercard">
            <label for="mastercard">Mastercard</label>
        </div>
                <p>2.<label for="card number">Card number :</label>
                <input type="number" id="card number" name="card number" placeholder="Enter your card number" >
                <p>3.<label for="security code">Security code :</label>
                <input type="number" id="security code" name="security code" placeholder="Enter your security code " >
                <p>4.<label for="name on card">Name on card :</label>
                <input type="text" id="name on card" name="name on card" placeholder="Enter your name on card " >
        </ul>
        </fieldset>
        </form>
        <fieldset>
            <button type="submit">Buy it!!</button>
        </fieldset>
</body>
</html>