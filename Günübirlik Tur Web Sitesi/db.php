<?php
// Veri tabanı bağlantı bilgileri
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "turizm_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$secili_tur = $_GET['tur'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tur_adi = $_POST['tur_adi'] ?? '';
    $ad_soyad = $_POST['ad_soyad'] ?? '';
    $telefon = $_POST['telefon'] ?? '';
    $kisi_sayisi = $_POST['kisi_sayisi'] ?? '';
    $tarih = $_POST['tarih'] ?? '';

    $sql = "INSERT INTO rezervasyonlar (tur_adi, ad_soyad, telefon, kisi_sayisi, tarih) 
            VALUES ('$tur_adi', '$ad_soyad', '$telefon', '$kisi_sayisi', '$tarih')";

    if ($conn->query($sql) === TRUE) {
        $mesaj = "Rezervasyonunuz alınmıştır! <br> Tur: $tur_adi <br> Ad Soyad: $ad_soyad <br> Telefon: $telefon <br> Kişi Sayısı: $kisi_sayisi <br> Tarih: $tarih";
    } else {
        $mesaj = "Hata: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervasyon - Keşif Turizm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
   
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
       
    </nav>

    <header class="header text-white text-center">
        <h1>Rezervasyon Yap</h1>
        <h3>Hayalindeki Tura Bir Adım Daha Yaklaş!</h3>
    </header>

    <div class="container">
        <h2>Rezervasyon Formu</h2>
        <?php if (isset($mesaj)): ?>
            <div class="success-message"><?php echo $mesaj; ?></div>
        <?php else: ?>
            <form method="POST" action="rezervasyon.php">
              
            </form>
        <?php endif; ?>
    </div>

    <footer class="text-white text-center">
        <p>© 2025 Keşif Turizm. Tüm hakları saklıdır.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

$conn->close();
?>