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
    <form method="POST">
        <fieldset>
            <legend>Your Details</legend>
            <ul>
                <p>1.<label for="nama">Name :</label>
                <input type="text" id="nama" name="nama" placeholder="Enter your name" required>
                <p>2.<label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <p>3.<label for="phone">Phone :</label>
                <input type="number" id="phone" name="phone" placeholder="Enter your phone " required>
            </ul>
        </fieldset>
        <fieldset>
            <legend>Delivery address</legend>
            <ul>
                <p>1.<label for="address">Address :</label>
                <textarea type="text" id="address" name="address" placeholder="Enter your address" required></textarea>
                <p>2.<label for="post-code">Post code :</label>
                <input type="text" id="post-code" name="post-code" placeholder="Enter your post code" required>
                <p>3.<label for="country">Country :</label>
                <select name="card" id="card" required>
                <option value="indonesia">Indonesia</option>
                <option value="india">India</option>
                <option value="irlandia">Irlandia</option>
                </select>
            </ul>
        </fieldset>
        <fieldset>
            <legend>Card Details</legend>
            <ul>
                <p>1.<label for="card" >Card type:</label>
                <div>
                    <input type="radio" id="visa" name="card_type" value="visa" required>
                    <label for="visa">VISA</label>
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
                <input type="number" id="card number" name="card number" placeholder="Enter your card number" required>
                <p>3.<label for="security code">Security code :</label>
                <input type="number" id="security_code" name="security code" placeholder="Enter your security code " required>
                <p>4.<label for="name on card">Name on card :</label>
                <input type="text" id="name on card" name="name_on_card" placeholder="Enter your name on card " required>
            </ul>
        </fieldset>
        <fieldset>
        <button type="submit">Buy it!!</button>
        <button type="reset" onclick="window.history.back();">Close</button>    
        </fieldset>
    </form>

</body>
</html>