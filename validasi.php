

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Form</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="nama" placeholder="nama">
        <input type="text" name="alamat" placeholder="alamat">
        <input type="submit">
    </form> 

    <?php
    if(isset($_POST['nama']) && isset($_POST['alamat'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        if(empty($nama) || empty($alamat)) {
            echo "Nama dan alamat harus diisi!";
        } else {
            echo "Nama: " . htmlspecialchars($nama) . "<br>";
            echo "Alamat: " . htmlspecialchars($alamat);
        }
    }
    ?>
</body>
</html>