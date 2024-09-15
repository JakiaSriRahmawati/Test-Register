<?php
require('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $country = $_POST['card'];
    $card = $_POST['card_type'];
    $security = $_POST['security_code'];
    $name_card = $_POST['name_on_card'];

    if (empty($name)) {
        echo "Nama harus diisi";
    } elseif (empty($email)) {
        echo "Email harus diisi";
    } elseif (empty($phone)) {
        echo "Telepon harus diisi";
    } elseif (empty($address)) {
        echo "Alamat harus diisi";
    } elseif (empty($country)) {
        echo "Negara harus diisi";
    } elseif (empty($card)) {
        echo "Tipe kartu harus diisi";
    } elseif (empty($security)) {
        echo "Kode keamanan harus diisi";
    } elseif (empty($name_card)) {
        echo "Nama di kartu harus diisi";
    } else {
        $stmt = $conn->prepare("INSERT INTO user (name,email,phone,address,country,card,security,name_card) VALUES(?,?,?,?,?,?,?,?)");
        $stmt->bind_param('sssssiis', $name, $email, $phone, $address, $country, $card, $security, $name_card);
        $stmt->execute();
        header('Location: tabel.php');
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Registrasi</title> 
    <style>
    .container {
            background-color: darkolivegreen;
            padding: 2%;
            margin: 2% auto;
            border: 1px solid #000;
            width: 55%;
    }
    button {
            margin-top: 20px; 
        }
    label img {
        margin-right: 8px; 
        vertical-align: middle; 
    }
</style>

</style>  
</head>
<body>
    <div class="container">
<div style="background-color:darkolivegreen" class="container p-3 my-3 border">
<form method="POST">
    <h2>Step 1: Your Details</h2>
        <fieldset>
        <div class="alert alert-secondary">
            <strong>Name :</strong>
            <input type="text" id="nama" name="nama" placeholder="First and last name" required>
        </div>
        </fieldset>
        <fieldset>
        <div class="alert alert-secondary">
            <strong>Email :</strong>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        </fieldset>
        <fieldset>
        <div class="alert alert-secondary">
            <strong>Phone :</strong>
            <input type="number" id="phone" name="phone" placeholder="Enter your phone " required>
        </div>
        </fieldset>
        <h2>Step 2: Delivery Address</h2>
        <fieldset>
        <div class="alert alert-secondary">
        <strong>Address :</strong>
        <textarea type="text" id="address" name="address" placeholder="Enter your address" required></textarea>
        </div>
        </fieldset>
        <fieldset>
        <div class="alert alert-secondary">
        <strong>Post code :</strong>
        <input type="text" id="post-code" name="post-code" placeholder="Enter your post code" required>
        </div>
        </fieldset>
        <fieldset>
        <div class="alert alert-secondary">
        <strong>Country :</strong>
                <select name="card" id="card" required>
                <option value="indonesia">Indonesia</option>
                <option value="india">India</option>
                <option value="irlandia">Irlandia</option>
                </select>
        </div>
        </fieldset>
        <h2>Step 3: Card details</h2>
        <fieldset>
        <div class="alert alert-secondary">
        <strong>Card type</strong>
        <div>
            <input type="radio" id="visa" name="card_type" value="visa" required>
            <label for="visa">
                <img src="image/visa.jpeg" style="width: 18px;">
            Visa</label>
            <input type="radio" id="amex" name="card_type" value="amex">
            <label for="amex">
               <img src="image/amex.png" alt="" style="width: 15px;"> 
            AmEx</label>
            <input type="radio" id="mastercard" name="card_type" value="mastercard">
            <label for="mastercard">
                <img src="image/mastercard.jpeg" alt="" style="width: 15px;">
            Mastercard</label>
            </div>
        </div>
        </fieldset>
        <fieldset>
        <div class="alert alert-secondary">
        <strong>Card number :</strong>
        <input type="number" id="card number" name="card number" placeholder="Enter your card number" required>
        </div>
        </fieldset>
        <fieldset>
        <div class="alert alert-secondary">      
        <strong>Security code :</strong>
        <input type="number" id="security_code" name="security code" placeholder="Enter your security code " required>
        </div>
        </fieldset> 
        <fieldset>
        <div class="alert alert-secondary">
            <strong>Name on card :</strong>
            <input type="text" id="name on card" name="name_on_card" placeholder="Enter your name on card " required>
        </div>
        </fieldset>
        
        <button type="submit">Buy it!!</button>
        <button type="reset" onclick="window.history.back();">Close</button>
    </form>
    </div>
    </div>
</body>
</html>

