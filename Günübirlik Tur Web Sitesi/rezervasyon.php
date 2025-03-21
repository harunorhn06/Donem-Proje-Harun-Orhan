<?php
// URL'den tur parametresini al
$secili_tur = $_GET['tur'] ?? '';

// Rezervasyon formundan gelen verileri işlemek için PHP kısmı
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tur_adi = $_POST['tur_adi'] ?? '';
    $ad_soyad = $_POST['ad_soyad'] ?? '';
    $telefon = $_POST['telefon'] ?? '';
    $kisi_sayisi = $_POST['kisi_sayisi'] ?? '';
    $tarih = $_POST['tarih'] ?? '';

    $mesaj = "Rezervasyonunuz alınmıştır! <br> Tur: $tur_adi <br> Ad Soyad: $ad_soyad <br> Telefon: $telefon <br> Kişi Sayısı: $kisi_sayisi <br> Tarih: $tarih";
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
        body {
            background: linear-gradient(135deg, #e6f0fa, #f8f9fa);
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .navbar {
            background: linear-gradient(to right, #007bff, #004085);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: 500;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #d4e6ff !important;
        }
        .header {
            background: linear-gradient(120deg, #007bff, #00c4cc);
            color: white;
            padding: 60px 20px;
            text-align: center;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            position: relative;
            overflow: hidden;
        }
        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2), transparent);
            animation: wave 10s infinite;
        }
        @keyframes wave {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1); /* Hafif şeffaf arka plan */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .container:hover {
            transform: translateY(-5px);
        }
        h2 {
            color: #007bff;
            font-weight: 600;
            margin-bottom: 35px;
            text-align: center;
            position: relative;
        }
        h2::after {
            content: '';
            width: 60px;
            height: 4px;
            background: #007bff;
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
        }
        .form-control, .form-select {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px;
            transition: border-color 0.3s, box-shadow 0.3s;
            background: rgba(255, 255, 255, 0.8); /* Form alanlarını görünür kılmak için */
        }
        .form-control:focus, .form-select:focus {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.3);
            outline: none;
        }
        .btn-primary {
            font-size: 16px;
            padding: 14px;
            border-radius: 30px;
            background: linear-gradient(to right, #007bff, #00c4cc);
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            overflow: hidden;
        }
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.4);
            background: linear-gradient(to right, #0056b3, #009b9f);
        }
        .btn-primary::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.4s, height 0.4s;
        }
        .btn-primary:hover::after {
            width: 300px;
            height: 300px;
        }
        footer {
            background: linear-gradient(to right, #2c3e50, #34495e);
            color: white;
            padding: 25px;
            margin-top: 60px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.2);
        }
        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            margin-top: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.5s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .form-group {
            position: relative;
            margin-bottom: 25px;
        }
        .form-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #007bff;
        }
        .form-group input, .form-group select {
            padding-left: 40px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Keşif Turizm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Ana Sayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="hakkimizda.php">Hakkımızda</a></li>
                </ul>
            </div>
        </div>
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
                <div class="form-group">
                    <label for="tur_adi" class="form-label">Tur Adı</label>
                    <i class="fas fa-map-marker-alt"></i>
                    <select class="form-select" id="tur_adi" name="tur_adi" required>
                        <option value="Amasra Turu" <?php if ($secili_tur == "Amasra Turu") echo "selected"; ?>>Amasra Turu - 699 ₺</option>
                        <option value="Abant Turu" <?php if ($secili_tur == "Abant Turu") echo "selected"; ?>>Abant Turu - 699 ₺</option>
                        <option value="Kapadokya Turu" <?php if ($secili_tur == "Kapadokya Turu") echo "selected"; ?>>Kapadokya Turu - 699 ₺</option>
                        <option value="Sinop Turu" <?php if ($secili_tur == "Sinop Turu") echo "selected"; ?>>Sinop Turu - 1200 ₺</option>
                        <option value="Küre Dağları Turu" <?php if ($secili_tur == "Küre Dağları Turu") echo "selected"; ?>>Küre Dağları Turu - 960 ₺</option>
                        <option value="Eskişehir Turu" <?php if ($secili_tur == "Eskişehir Turu") echo "selected"; ?>>Eskişehir Turu - 699 ₺</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ad_soyad" class="form-label">Ad Soyad</label>
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" id="ad_soyad" name="ad_soyad" required>
                </div>
                <div class="form-group">
                    <label for="telefon" class="form-label">Telefon Numarası</label>
                    <i class="fas fa-phone"></i>
                    <input type="tel" class="form-control" id="telefon" name="telefon" required>
                </div>
                <div class="form-group">
                    <label for="kisi_sayisi" class="form-label">Kişi Sayısı</label>
                    <i class="fas fa-users"></i>
                    <input type="number" class="form-control" id="kisi_sayisi" name="kisi_sayisi" min="1" required>
                </div>
                <div class="form-group">
                    <label for="tarih" class="form-label">Tur Tarihi</label>
                    <i class="fas fa-calendar-alt"></i>
                    <input type="date" class="form-control" id="tarih" name="tarih" required>
                </div>
                <button type="submit" class="btn btn-primary">Rezervasyonu Tamamla</button>
            </form>
        <?php endif; ?>
    </div>

    <footer class="text-white text-center">
        <p>© 2025 Keşif Turizm. Tüm hakları saklıdır.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>