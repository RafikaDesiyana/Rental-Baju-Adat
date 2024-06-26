<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pesanan</title>
    
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    color: #4CAF50;
}

a.button {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

a.button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai dari form input
            $name = htmlspecialchars($_POST['name']);
            $phone = htmlspecialchars($_POST['phone']);
            $address = htmlspecialchars($_POST['address']);
            $duration = htmlspecialchars($_POST['duration']);
            $payment = htmlspecialchars($_POST['payment']);
            
            // Ambil nilai dari input tersembunyi untuk item title dan item price
            $itemTitle = htmlspecialchars($_POST['itemTitle']);
            $itemPrice = htmlspecialchars($_POST['itemPrice']);

            // Gabungkan semua data menjadi satu string
            $orderDetails = "Nama: $name\nNo HP: $phone\nAlamat: $address\nDurasi Peminjaman: $duration hari\nMetode Pembayaran: $payment\nJudul Item: $itemTitle\nHarga Item: $itemPrice\n\n";

            // Simpan data ke dalam file
            $file = 'orderdetails.txt';
            file_put_contents($file, $orderDetails, FILE_APPEND | LOCK_EX);

            // Tampilkan pesan konfirmasi
            echo "<h2>Order berhasil disimpan!</h2>";
        }
        ?>
        <a class="button" href="index.php">Kembali ke Beranda</a>
    </div>
</body>
</html>

