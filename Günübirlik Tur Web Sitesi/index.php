<?php

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
        .header {
            background-attachment: fixed; 
            transition: background-position 0.1s ease;
        }
        .tour-card {
            position: relative; 
        }
        .fa-heart {
            transition: color 0.3s ease;
        }
        .fa-heart:hover {
            color: #ff6666 !important;
        }
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
            <div class="col">
                <div class="tour-card">
                    <img src="https://cdn.trav3l.net/www.gezgintur.com/files/actv/287/safranbolu-nasil-gidilir-yol-f.jpg" alt="Safranbolu">
                    <div class="card-body">
                        <h5 class="card-title">Safranbolu Turu - 750 ₺</h5>
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
            <div class="col">
                <div class="tour-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIK5mpWpzSM6VoYbCNCJ4iekjPWuVWEo9oFg&s" alt="Yedigöller">
                    <div class="card-body">
                        <h5 class="card-title">Yedigöller Turu - 800 ₺</h5>
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
            <div class="col">
                <div class="tour-card">
                    <img src="https://i0.wp.com/turkeyoutdoor.org/wp-content/uploads/2023/11/Ilgaz-Daglari1.jpg?w=900&ssl=1" alt="Ilgaz">
                    <div class="card-body">
                        <h5 class="card-title">Ilgaz Turu - 850 ₺</h5>
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
            <div class="col">
                <div class="tour-card">
                    <img src="https://dijontravel.com/wp-content/uploads/2020/02/beypazari.jpg" alt="Beypazarı">
                    <div class="card-body">
                        <h5 class="card-title">Beypazarı Turu - 650 ₺</h5>
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
            <div class="col">
                <div class="tour-card">
                    <img src="https://gizatur.com.tr/wp-content/uploads/2023/02/sinop2.jpg" alt="Kastamonu">
                    <div class="card-body">
                        <h5 class="card-title">Kastamonu Turu - 900 ₺</h5>
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
            <div class="col">
                <div class="tour-card">
                    <img src="https://www.advantour.com/img/turkey/images/konya.jpg" alt="Konya">
                    <div class="card-body">
                        <h5 class="card-title">Konya Turu - 850 ₺</h5>
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
           
            <div class="col">
                <div class="tour-card">
                    <img src="https://cdn.trav3l.net/modatatil.com/uploads/sakaryanin-modern-yuzu-akyazi-3ca1.webp" alt="Amasya">
                    <div class="card-body">
                        <h5 class="card-title">Akyazı Turu - 700 ₺</h5>
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
            <div class="col">
                <div class="tour-card">
                    <img src="https://cdn.trav3l.net/tourgross.com/files/actv/120/tarihi_camasirhane-f.jpg" alt="Çankırı">
                    <div class="card-body">
                        <h5 class="card-title">Çankırı Turu - 720 ₺</h5>
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
            <div class="col">
                <div class="tour-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyFJAXt-CEBYSsFtmrYHrVK29_Iqn3pEMrpA&s" alt="Bartın">
                    <div class="card-body">
                        <h5 class="card-title">Bartın Turu - 780 ₺</h5>
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
  

    <footer class="text-white text-center">
        <p>© 2025 Keşif Turizm. Tüm hakları saklıdır.</p> 
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    
        function filterTours() {
            const filterInput = document.createElement('input');
            filterInput.placeholder = 'Tur ara (ör: Amasra)';
            filterInput.classList.add('form-control', 'mb-4', 'w-50', 'mx-auto');
            document.querySelector('.container h2').insertAdjacentElement('afterend', filterInput);

            filterInput.addEventListener('input', (e) => {
                const searchTerm = e.target.value.toLowerCase();
                document.querySelectorAll('.tour-card').forEach(card => {
                    const title = card.querySelector('.card-title').textContent.toLowerCase();
                    if (title.includes(searchTerm)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        }
        filterTours();

   
        const fixedBtn = document.createElement('button');
        fixedBtn.textContent = 'Hızlı Rezervasyon';
        fixedBtn.classList.add('btn', 'btn-primary', 'position-fixed');
        fixedBtn.style.bottom = '20px';
        fixedBtn.style.right = '20px';
        fixedBtn.style.zIndex = '1000';
        document.body.appendChild(fixedBtn);

        fixedBtn.addEventListener('click', () => {
            alert('Hızlı rezervasyon için lütfen (0312) 230 06 06 numaralı telefonu arayın!');
        });

      
        const header = document.querySelector('.header');
        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;
            header.style.backgroundPositionY = `${scrollPosition * 0.5}px`;
        });

    
        document.querySelectorAll('.tour-card').forEach(card => {
            const favIcon = document.createElement('i');
            favIcon.classList.add('fas', 'fa-heart', 'position-absolute');
            favIcon.style.top = '15px';
            favIcon.style.right = '15px';
            favIcon.style.fontSize = '24px';
            favIcon.style.color = '#ccc';
            favIcon.style.cursor = 'pointer';
            card.insertBefore(favIcon, card.firstChild);

            favIcon.addEventListener('click', () => {
                if (favIcon.style.color === 'rgb(204, 204, 204)') { // #ccc
                    favIcon.style.color = '#ff4444';
                } else {
                    favIcon.style.color = '#ccc';
                }
            });
        });
    </script>
</body>
</html>