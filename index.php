<?php
// PHP code can be added here if needed
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keşif Turizm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fa;
            overflow-x: hidden;
            margin: 0;
        }

        /* Navbar */
        .navbar {
            background: rgba(0, 0, 0, 0.7);
            transition: background 0.3s ease;
            position: fixed;
            width: 100%;
            z-index: 1000;
            padding: 0.75rem 0;
        }
        .navbar.scrolled {
            background: #1a202c;
        }
        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: 400;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #4fd1c5 !important;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            overflow: hidden;
        }
        .swiper-hero {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .swiper-hero .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .hero-content h1 {
            font-size: 2.5rem;
            font-weight: 700;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
            margin-bottom: 0.5rem;
        }
        .hero-content p {
            font-size: 1.2rem;
            font-weight: 300;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            margin-bottom: 1.5rem;
        }
        .hero-content .btn {
            padding: 0.6rem 1.8rem;
            font-size: 1rem;
            border-radius: 9999px;
            background: linear-gradient(to right, #4fd1c5, #4299e1);
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .hero-content .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }

        /* Tours Section */
        .tours-section {
            padding: 3rem 0;
        }
        .container {
            max-width: 1400px;
        }
        h2 {
            color: #2d3748;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2.5rem;
            position: relative;
        }
        h2::after {
            content: '';
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #4fd1c5, #4299e1);
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
        }
        .tour-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            position: relative;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .tour-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }
        .tour-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .tour-card:hover img {
            transform: scale(1.03);
        }
        .card-body {
            padding: 1.5rem;
            text-align: left;
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 250px;
        }
        .card-title {
            font-size: 1.25rem;
            color: #2d3748;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }
        .card-text {
            font-size: 0.9rem;
            color: #4a5568;
            margin-bottom: 1rem;
            line-height: 1.6;
            height: 70px;
            overflow: hidden;
        }
        .price-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: linear-gradient(to right, #48bb78, #38a169);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        .reservation-info {
            font-size: 0.85rem;
            color: #4a5568;
            background: #f7fafc;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            height: 100px;
            overflow: hidden;
        }
        .btn-primary {
            padding: 0.5rem 1.5rem;
            border-radius: 9999px;
            background: linear-gradient(to right, #4fd1c5, #4299e1);
            border: none;
            font-size: 0.9rem;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-top: auto;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Footer */
        footer {
            background: #2d3748;
            color: white;
            padding: 2.5rem 0;
            margin-top: 3rem;
        }
        .footer-logo {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin: 0 0.75rem;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #4fd1c5;
        }
        .newsletter-form {
            max-width: 400px;
            margin: 1rem auto;
        }
        .newsletter-form input {
            border-radius: 9999px 0 0 9999px;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 0.9rem;
        }
        .newsletter-form button {
            border-radius: 0 9999px 9999px 0;
            background: #4fd1c5;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 0.9rem;
        }
        .newsletter-form button:hover {
            background: #4299e1;
        }

        /* Quick Reservation Button */
        .quick-reservation {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: linear-gradient(to right, #4fd1c5, #4299e1);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            transition: transform 0.3s ease;
        }
        .quick-reservation:hover {
            transform: scale(1.05);
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeInUp 0.6s ease-in-out;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                height: 50vh;
            }
            .hero-content h1 {
                font-size: 1.8rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .tour-card {
                margin: 0.5rem;
            }
            .quick-reservation {
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }
            .card-body {
                min-height: auto;
            }
            .card-text {
                height: auto;
            }
            .reservation-info {
                height: auto;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Ana Sayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="hakkimizda.php">Hakkımızda</a>
                    <li class="nav-item"><a class="nav-link active" href="gezilerimiz.php">Gezilerimiz</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="swiper swiper-hero">
            <div class="swiper-wrapper">
                <div class="swiper-slide">  
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Amasra_%289310207038%29.jpg/1200px-Amasra_%289310207038%29.jpg " alt="Amasra">
                </div>
                <div class="swiper-slide">
                    <img src="https://c4.wallpaperflare.com/wallpaper/62/352/976/bolu-abant-golu-tabat-park-hd-wallpaper-wallpaper-preview.jpg" alt="Abant">
                </div>
                <div class="swiper-slide">
                    <img src="https://c1.wallpaperflare.com/preview/966/574/348/sinop-akliman-bank-put-it-in-the.jpg" alt="Sinop">
                </div>
                 <div class="swiper-slide">
                    <img src="https://seyahatdergisi.com/wp-content/uploads/2018/04/ilica-selalesi.jpg" alt="Kastamonu">
                </div>
                 <div class="swiper-slide">
                    <img src="https://aroundtogether.com/wp-content/uploads/2017/10/kastamonu-%C4%B1lgaz-da%C4%9F%C4%B1-3.jpg" alt="Ilgaz">
                </div>
                <div class="swiper-slide">
                    <img src="https://cdn.trav3l.net/www.gezgintur.com/files/actv/287/safranbolu-nasil-gidilir-yol-f.jpg" alt="Safranbolu">
                </div>

                <div class="swiper-slide">
                    <img src="https://www.advantour.com/img/turkey/images/konya.jpg" alt="Konya">
                 </div>
 
                <div class="swiper-slide">
                    <img src="https://c4.wallpaperflare.com/wallpaper/611/860/1015/amasra-bart%C4%B1n-turkey-island-wallpaper-preview.jpg" alt="Bartın">
                </div>

                <div class="swiper-slide">
                    <img src="https://c4.wallpaperflare.com/wallpaper/382/758/444/turkey-dreams-of-cappadocia-avanos-nevsehir-wallpaper-preview.jpg" alt="Kapadokya">
                </div>
                
                <div class="swiper-slide">
                    <img src="https://media.istockphoto.com/id/459973023/tr/foto%C4%9Fraf/lake-in-the-forest.jpg?s=612x612&w=0&k=20&c=zKbopIi0z0WaWFEWbqNvmO_rabNj62YoI_ramvyx6t8=" alt="YediGöller">
                </div>
                <div class="swiper-slide">
                    <img src="https://media.istockphoto.com/id/489632940/tr/foto%C4%9Fraf/colorful-old-houses.jpg?b=1&s=612x612&w=0&k=20&c=bgZPPHxxY43SpL4-cjzjhErw-JNL4XK8y9ldfWpE9VI=" alt="Eskişehir">
                </div>
                 <div class="swiper-slide">
                    <img src="https://i.pinimg.com/736x/08/7a/eb/087aeb23b5f25e355c3eb121dddf60d7.jpg" alt="Beypazarı">
                </div>
                </div>
                </div>                
            </div>
        </div>
        <div class="hero-content">
            <h1>Keşif Turizm</h1>
            <p>Ankara Çıkışlı Günübirlik Turlar</p>
            <a href="#tours" class="btn btn-primary">Turları Keşfet</a>
        </div>
    </section>

    <section class="tours-section" id="tours">
        <div class="container">
            <h2>Turlarımız</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">699 ₺</span>
                        <img src="https://amasra.net/wp-content/uploads/2016/06/amasra_kalesi.jpg" alt="Amasra">
                        <div class="card-body">
                            <h5 class="card-title">Amasra Turu</h5>
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
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">699 ₺</span>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6fXgpqLv8-tjS3rQKBZMhG0PB33GI7EeQ2A&s" alt="Abant">
                        <div class="card-body">
                            <h5 class="card-title">Abant Turu</h5>
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
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">699 ₺</span>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZ1lepEhQCA0flDMaHgAW0swIJjeZg_k6wwQ&s" alt="Kapadokya">
                        <div class="card-body">
                            <h5 class="card-title">Kapadokya Turu</h5>
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
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">1200 ₺</span>
                        <img src="https://caliskanturizm.com/py-editor-3.02/images//S%C4%B0NOP%20KALES%C4%B0.jpg" alt="Sinop">
                        <div class="card-body">
                            <h5 class="card-title">Sinop Turu</h5>
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
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">960 ₺</span>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5FNEuFtRU7ty533E4BSD83F7e-SscHemFOA&s" alt="Küre Dağları">
                        <div class="card-body">
                            <h5 class="card-title">Küre Dağları Turu</h5>
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
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">699 ₺</span>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5owrQRNjcH-WH2sdJZGaXi4ywWK_1S9w5rg&s" alt="Eskişehir">
                        <div class="card-body">
                            <h5 class="card-title">Eskişehir Turu</h5>
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
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">750 ₺</span>
                        <img src="https://cdn.trav3l.net/www.gezgintur.com/files/actv/287/safranbolu-nasil-gidilir-yol-f.jpg" alt="Safranbolu">
                        <div class="card-body">
                            <h5 class="card-title">Safranbolu Turu</h5>
                            <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Safranbolu turu, Osmanlı mimarisinin eşsiz örneklerini keşfetme fırsatı sunar.</p>
                            <p class="reservation-info">
                                <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                                <strong>Gezilecek Yerler:</strong><br>
                                Safranbolu Evleri – Hıdırlık Tepesi – Cinci Hanı – Yörük Köyü
                            </p>
                            <a href="rezervasyon.php?tur=Safranbolu Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">800 ₺</span>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIK5mpWpzSM6VoYbCNCJ4iekjPWuVWEo9oFg&s" alt="Yedigöller">
                        <div class="card-body">
                            <h5 class="card-title">Yedigöller Turu</h5>
                            <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Yedigöller turu, doğanın renk cümbüşünü yaşamak isteyenler için idealdir.</p>
                            <p class="reservation-info">
                                <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                                <strong>Gezilecek Yerler:</strong><br>
                                Büyükgöl – Seringöl – Deringöl – Kapankaya Seyir Terası
                            </p>
                            <a href="rezervasyon.php?tur=Yedigöller Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">850 ₺</span>
                        <img src="https://aroundtogether.com/wp-content/uploads/2017/10/kastamonu-%C4%B1lgaz-da%C4%9F%C4%B1-3.jpg" alt="Ilgaz">
                        <div class="card-body">
                            <h5 class="card-title">Ilgaz Turu</h5>
                            <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Ilgaz turu, kayak ve doğa tutkunları için harika bir seçenektir.</p>
                            <p class="reservation-info">
                                <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                                <strong>Gezilecek Yerler:</strong><br>
                                Ilgaz Kayak Merkezi – Ilgaz Dağı Milli Parkı – Yıldıztepe Seyir Noktası
                            </p>
                            <a href="rezervasyon.php?tur=Ilgaz Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">650 ₺</span>
                        <img src="https://dijontravel.com/wp-content/uploads/2020/02/beypazari.jpg" alt="Beypazarı">
                        <div class="card-body">
                            <h5 class="card-title">Beypazarı Turu</h5>
                            <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Beypazarı turu, tarihi dokusu ve yöresel lezzetleriyle tanınır.</p>
                            <p class="reservation-info">
                                <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                                <strong>Gezilecek Yerler:</strong><br>
                                Beypazarı Evleri – İnözü Vadisi – Yaşayan Müze – Hıdırlık Tepesi
                            </p>
                            <a href="rezervasyon.php?tur=Beypazarı Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">900 ₺</span>
                        <img src="https://gizatur.com.tr/wp-content/uploads/2023/02/sinop2.jpg" alt="Kastamonu">
                        <div class="card-body">
                            <h5 class="card-title">Kastamonu Turu</h5>
                            <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Kastamonu turu, tarih ve doğanın buluştuğu bir deneyim sunar.</p>
                            <p class="reservation-info">
                                <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                                <strong>Gezilecek Yerler:</strong><br>
                                Kastamonu Kalesi – Nasrullah Camii – Valla Kanyonu Seyir Terası
                            </p>
                            <a href="rezervasyon.php?tur=Kastamonu Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">850 ₺</span>
                        <img src="https://www.advantour.com/img/turkey/images/konya.jpg" alt="Konya">
                        <div class="card-body">
                            <h5 class="card-title">Konya Turu</h5>
                            <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Konya turu, Mevlana’nın şehri ve tarihi zenginlikleriyle tanınır.</p>
                            <p class="reservation-info">
                                <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                                <strong>Gezilecek Yerler:</strong><br>
                                Mevlana Müzesi – Alaaddin Tepesi – Şems-i Tebrizi Türbesi – Sille Köyü
                            </p>
                            <a href="rezervasyon.php?tur=Konya Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">700 ₺</span>
                        <img src="https://cdn.trav3l.net/modatatil.com/uploads/sakaryanin-modern-yuzu-akyazi-3ca1.webp" alt="Akyazı">
                        <div class="card-body">
                            <h5 class="card-title">Akyazı Turu</h5>
                            <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Akyazı turu, Sakarya’nın doğal güzellikleri ve sakin atmosferiyle tanınır.</p>
                            <p class="reservation-info">
                                <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                                <strong>Gezilecek Yerler:</strong><br>
                                Acarlar Longozu – Poyrazlar Gölü – Akyazı Yaylaları – Keremali Türbesi
                            </p>
                            <a href="rezervasyon.php?tur=Akyazı Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">720 ₺</span>
                        <img src="https://cdn.trav3l.net/tourgross.com/files/actv/120/tarihi_camasirhane-f.jpg" alt="Çankırı">
                        <div class="card-body">
                            <h5 class="card-title">Çankırı Turu</h5>
                            <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Çankırı turu, tarihi ve doğal güzellikleriyle dikkat çeker.</p>
                            <p class="reservation-info">
                                <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                                <strong>Gezilecek Yerler:</strong><br>
                                Çankırı Kalesi – Tuz Mağarası – Ilgaz Çamlığı – Taş Mescit
                            </p>
                            <a href="rezervasyon.php?tur=Çankırı Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tour-card fade-in">
                        <span class="price-badge">780 ₺</span>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyFJAXt-CEBYSsFtmrYHrVK29_Iqn3pEMrpA&s" alt="Bartın">
                        <div class="card-body">
                            <h5 class="card-title">Bartın Turu</h5>
                            <p class="card-text">Ankara'dan sabah erken saatlerde başlayan günübirlik Bartın turu, Karadeniz’in sakin güzelliklerini ve tarihi dokusunu sunar.</p>
                            <p class="reservation-info">
                                <strong>Rezervasyon:</strong> (0312) 230 06 06<br>
                                <strong>Gezilecek Yerler:</strong><br>
                                Bartın Irmağı – İnkumu Plajı – Ulukaya Şelalesi – Gürcüoluk Mağarası
                            </p>
                            <a href="rezervasyon.php?tur=Bartın Turu"><button class="btn btn-primary">Rezervasyon Yap</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <div class="footer-logo">Keşif Turizm</div>
            <p class="mt-3">İletişim: (0312) 230 06 06 | info@kesifturizm.com</p>
            <div class="social-icons my-3">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <p>© 2025 Keşif Turizm. Tüm hakları saklıdır.</p>
            </div>
            </div>
        </div>
    </footer>

    <!-- Quick Reservation Button -->
    <button class="quick-reservation">Hızlı Rezervasyon</button>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        // Initialize Hero Carousel
        const heroSwiper = new Swiper('.swiper-hero', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            effect: 'fade',
        });

        // Navbar Scroll Effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Filter Tours
        function filterTours() {
            const filterInput = document.createElement('input');
            filterInput.placeholder = 'Tur ara (örn: Amasra)';
            filterInput.classList.add('form-control', 'mb-4', 'w-50', 'mx-auto');
            document.querySelector('.tours-section h2').insertAdjacentElement('afterend', filterInput);

            filterInput.addEventListener('input', (e) => {
                const searchTerm = e.target.value.toLowerCase();
                document.querySelectorAll('.tour-card').forEach(card => {
                    const title = card.querySelector('.card-title').textContent.toLowerCase();
                    card.style.display = title.includes(searchTerm) ? 'block' : 'none';
                });
            });
        }
        filterTours();

        // Quick Reservation Button
        document.querySelector('.quick-reservation').addEventListener('click', () => {
            alert('Hızlı rezervasyon için lütfen (0312) 230 06 06 numaralı telefonu arayın!');
        });

        // Favorite Icon Functionality
        document.querySelectorAll('.tour-card').forEach(card => {
            const favIcon = document.createElement('i');
            favIcon.classList.add('fas', 'fa-heart', 'position-absolute');
            favIcon.style.top = '15px';
            favIcon.style.left = '15px';
            favIcon.style.fontSize = '18px';
            favIcon.style.color = '#e2e8f0';
            favIcon.style.cursor = 'pointer';
            card.insertBefore(favIcon, card.firstChild);

            favIcon.addEventListener('click', () => {
                favIcon.style.color = favIcon.style.color === 'rgb(226, 232, 240)' ? '#e53e3e' : '#e2e8f0';
            });
        });

        // Smooth Scroll for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth',
                });
            });
        });
    </script>
</body>
</html>