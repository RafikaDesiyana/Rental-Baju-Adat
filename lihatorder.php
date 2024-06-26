<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
<style>
    
</style>
</head>
<body>
    <div class="container">
        <h2>Detail Pesanan</h2>
        <?php
        $file = 'orderdetails.txt';
        if (file_exists($file)) {
            $orders = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            if ($orders) {
                echo "<ul>";
                foreach ($orders as $order) {
                    // Pisahkan setiap detail pesanan berdasarkan newline (\n)
                    $orderDetails = explode("\n", $order);
                    echo "<li>";
                    foreach ($orderDetails as $detail) {
                        echo htmlspecialchars($detail) . "<br>" ;
                    }
                    echo "</li>";
                    echo "<hr>"; // For separating each order
                }
                echo "</ul>";
                echo "<br>";
            } else {
                echo "<p>Tidak ada pesanan yang ditemukan.</p>";
            }
        } else {
            echo "<p>File pesanan tidak ditemukan.</p>";
        }
        echo "<br>";
        ?>
        <a href="index.php">Kembali ke Beranda</a>
    </div>
</body>
</html>
