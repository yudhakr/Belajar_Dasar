<?php
$nama = $_GET['nama'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LLatihan</title>
</head>
<body>
    <h1>Welcome <?php echo $nama; ?>!</h1> <br><br>
    <h2>Formulir Kontak</h2>
    <!-- <form action="process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Submit">
        <input type="radio" name="Bahasa" value="Hindi"> Hindi
        <input type="radio" name="Bahasa" value="English"> English
        <input type="radio" name="Bahasa" value="French"> French

        <input type="file" name="subscribe" value="yes"> Masukkan file<br><br>
    </form> -->
</body>
</html>