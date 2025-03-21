<?php
// PHP kısmı şimdilik boş, gerekirse rezervasyon için kullanılabilir
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keşif Turizm</title>
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
            padding: 80px 20px;
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
            max-width: 1400px;
            margin-top: 60px;
        }
        h2 {
            color: #007bff;
            font-weight: 600;
            margin-bottom: 50px;
            text-align: center;
            position: relative;
        }
        h2::after {
            content: '';
            width: 80px;
            height: 4px;
            background: #007bff;
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        .tour-card {
            width: 360px;
            margin: 25px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
            background-color: white;
            display: flex;
            flex-direction: column;
            position: relative;
        }
        .tour-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }
        .tour-card img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            transition: transform 0.3s;
        }
        .tour-card:hover img {
            transform: scale(1.05);
        }
        .card-body {
            padding: 25px;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-title {
            font-size: 24px;
            color: #007bff;
            margin-bottom: 15px;
            font-weight: 600;
        }
        .card-text {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
            line-height: 1.5;
        }
        .reservation-info {
            font-size: 14px;
            color: #333;
            margin: 15px 0;
            background: linear-gradient(135deg, #f1f3f5, #e9ecef);
            padding: 15px;
            border-radius: 12px;
            box-shadow: inset 0 2px 5px rgba(0,0,0,0.05);
        }
        .btn-primary {
            font-size: 15px;
            padding: 12px 25px;
            border-radius: 30px;
            background: linear-gradient(to right, #007bff, #00c4cc);
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-top: 20px;
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
        .row {
            justify-content: center;
            animation: fadeInUp 0.8s ease-in-out;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        footer {
            background: linear-gradient(to right, #2c3e50, #34495e);
            color: white;
            padding: 40px;
            margin-top: 80px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.2);
        }
        @media (max-width: 768px) {
            .tour-card {
                width: 320px;
            }
            .tour-card img {
                height: 220px;
            }
            .card-title {
                font-size: 20px;
            }
            .card-text, .reservation-info {
                font-size: 14px;
            }
            .btn-primary {
                font-size: 13px;
                padding: 10px 20px;
            }
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
        <h1>Keşif Turizm</h1>
        <h3>Ankara Çıkışlı Günübirlik Turlar</h3>
    </header>

    <div class="container mt-5">
        <h2>Turlarımız</h2>
        <div class="row">
            <div class="col">
                <div class="tour-card">
                    <img src="https://amasra.net/wp-content/uploads/2016/06/amasra_kalesi.jpg" alt="Amasra">
                    <div class="card-body">
                        <h5 class="card-title">Amasra Turu - 699 ₺</h5>
                        <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Amasra turu, Karadeniz'in eşsiz güzelliklerini keşfetme fırsatı sunar.</p>
                        <p class="reservation-info">
                            <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                            <strong>Gezilecek Yerler:</strong><br>
                            Amasra Kalesi – Barış Akarsu Heykeli - Tavşan Adası (Panoramik) – Ağlayan Ağaç
                        </p>
                        <a href="rezervasyon.php?tur=Amasra Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tour-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6fXgpqLv8-tjS3rQKBZMhG0PB33GI7EeQ2A&s" alt="Abant">
                    <div class="card-body">
                        <h5 class="card-title">Abant Turu - 699 ₺</h5>
                        <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Abant turu, Bolu'nun büyüleyici doğal güzelliklerini keşfetmek için idealdir.</p>
                        <p class="reservation-info">
                            <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                            <strong>Gezilecek Yerler:</strong><br>
                            Beypazarı Şehir Merkezi - Abant Milli Park - Gölcük Gölü - Abant Gölü
                        </p>
                        <a href="rezervasyon.php?tur=Abant Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tour-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZ1lepEhQCA0flDMaHgAW0swIJjeZg_k6wwQ&s" alt="Kapadokya">
                    <div class="card-body">
                        <h5 class="card-title">Kapadokya Turu - 699 ₺</h5>
                        <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Kapadokya turu, peri bacaları ve yer altı şehirleriyle ünlü bu bölgeyi keşfetme fırsatı sunar.</p>
                        <p class="reservation-info">
                            <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                            <strong>Gezilecek Yerler:</strong><br>
                            Tuz Gölü – Güvercinlik Vadisi - Uçhisar Kalesi - Avanos
                        </p>
                        <a href="rezervasyon.php?tur=Kapadokya Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tour-card">
                    <img src="https://caliskanturizm.com/py-editor-3.02/images//S%C4%B0NOP%20KALES%C4%B0.jpg" alt="Sinop">
                    <div class="card-body">
                        <h5 class="card-title">Sinop Turu - 1200 ₺</h5>
                        <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Sinop turu, Karadeniz’in incisi Sinop’un doğal ve tarihi güzelliklerini sunar.</p>
                        <p class="reservation-info">
                            <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                            <strong>Gezilecek Yerler:</strong><br>
                            Erfelek Şelalesi – Sinop Tarihi Cezaevi – Sinop Kalesi - Hamsilos Koyu
                        </p>
                        <a href="rezervasyon.php?tur=Sinop Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tour-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5FNEuFtRU7ty533E4BSD83F7e-SscHemFOA&s" alt="Küre Dağları">
                    <div class="card-body">
                        <h5 class="card-title">Küre Dağları Turu - 960 ₺</h5>
                        <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Küre Dağları turu, yemyeşil ormanlar ve kanyonlarla dolu bir doğa harikasıdır.</p>
                        <p class="reservation-info">
                            <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                            <strong>Gezilecek Yerler:</strong><br>
                            Çatak Kanyonu – Horma Kanyonu – Ilıca Şelaleleri
                        </p>
                        <a href="rezervasyon.php?tur=Küre Dağları Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tour-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5owrQRNjcH-WH2sdJZGaXi4ywWK_1S9w5rg&s" alt="Eskişehir">
                    <div class="card-body">
                        <h5 class="card-title">Eskişehir Turu - 699 ₺</h5>
                        <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Eskişehir turu, tarihi Odunpazarı evleri ve Porsuk Çayı ile dolu bir deneyim sunar.</p>
                        <p class="reservation-info">
                            <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                            <strong>Gezilecek Yerler:</strong><br>
                            Balmumu Heykelleri Müzesi - Odunpazarı - Porsuk Çayı - Sazova Parkı
                        </p>
                        <a href="rezervasyon.php?tur=Eskişehir Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-white text-center">
        <p>© 2025 Keşif Turizm. Tüm hakları saklıdır.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>