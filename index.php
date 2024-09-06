<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    
</head>
<body>
        <h1>Your Details</h1>
    <form action="koneksi.php" method="post">
        <ul>
                <p>1. <label for="nama">Name :</label>
                <input type="text" id="nama" name="nama" placeholder="Enter your name" required>
                <p>2.<label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <p>3.<label for="phone">Phone :</label>
                <input type="number" id="phone" name="phone" placeholder="Enter your phone " required>
        </ul>
    </form>
    <h1>Delivery address</h1>
<form action="" method="post">
        <ul>
                <p>1.<label for="address">Address :</label>
                <textarea type="text" id="nama" name="address" placeholder="Enter your address" required></textarea>
                <p>2.<label for="post-code">Post code :</label>
                <input type="text" id="post-code" name="post-code" placeholder="Enter your post code" required>
                <p>3.<label for="country">Country :</label>
                <select name="card" id="card">
                <option value="indonesia">Indonesia</option>
                <option value="india">India</option>
                <option value="irlandia">Irlandia</option>
                </select>
        </ul>
    </form>
    <h1>Card Details</h1>
    <form action="" method="post">
        <ul>
        <p>1.<label for="card" >Card type:</label>
        <div>
            <input type="radio" id="visa" name="card_type" value="visa">
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
                <input type="number" id="security code" name="security code" placeholder="Enter your security code " required>
                <p>4.<label for="name on card">Name on card :</label>
                <input type="text" id="name on card" name="name on card" placeholder="Enter your name on card " required>
        </ul>
        <button type="submit" name="register">Buy it!!</button>
    </form>
</body>
</html>