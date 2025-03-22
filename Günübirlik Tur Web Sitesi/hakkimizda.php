<?php
// PHP kısmı şimdilik boş, gerekirse içerik dinamikleştirilebilir
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda - Keşif Turizm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(to right, #007bff, #0056b3);
            color: white ;  
            padding: 60px 20px;
            text-align: center;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .container {
            max-width: 1300px;
        }
        .text-justify {
            text-align: justify;
        }
        h2, h3 {
            color: #007bff;
            font-weight: bold;
        }
        h5 {
            color: #007bff;
            margin-bottom: 10px;
        }
        .bg-light, .bg-white {
            padding: 40px 0;
        }
        .bg-light p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }
        .bg-white .row {
            justify-content: center;
        }
        .bg-white .col-md-4 {
            padding: 20px;
            transition: transform 0.3s;
        }
        .bg-white .col-md-4:hover {
            transform: translateY(-10px);
        }
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 30px;
            margin-top: 60px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }
        @media (max-width: 768px) {
            .bg-light p {
                font-size: 14px;
            }
            h2, h3 {
                font-size: 24px;
            }
            h5 {
                font-size: 18px;
            }
            .bg-white .col-md-4 {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Keşif Turizm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Ana Sayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link active" href="hakkimizda.php">Hakkımızda</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Biz Kimiz?</h2>
            <p class="text-justify">Keşfetmek, insanın doğasında var olan bir tutkudur. Keşif turizm ise bu tutkuyu en iyi şekilde tatmin eden seyahat türlerinden biridir. Sıradan tatil anlayışının ötesine geçerek, bilinmeyen rotaları keşfetmek, doğanın ve tarihin derinliklerine dalmak isteyen gezginler için harika bir fırsat sunar.</p>
            <p class="text-justify">Keşif turizminde amaç, sadece bir yerde vakit geçirmek değil, o yerin ruhunu hissetmek ve benzersiz deneyimler yaşamaktır. Bu, vahşi doğada kamp yapmaktan tarihi kalıntıları incelemeye, geleneksel kültürleri tanımaktan doğal güzellikleri keşfetmeye kadar geniş bir yelpazeye sahiptir.</p>
            <p class="text-justify">Bu tür seyahatler, macera arayan gezginler için mükemmel bir seçenektir. Sıradan turistik destinasyonlardan uzaklaşarak gizli kalmış koyları keşfetmek, yerel halkla etkileşime geçmek ve doğal yaşamın içinde kaybolmak, keşif turizminin sunduğu en büyük avantajlardan biridir.</p>
            <p class="text-justify">Keşif turizmi aynı zamanda sürdürülebilir seyahat anlayışıyla da örtüşür. Doğaya ve yerel kültüre zarar vermeden yapılan bu tür geziler, hem gezginler hem de bölge halkı için olumlu etkiler yaratır.</p>
            <p class="text-justify">Eğer siz de turizme farklı bir bakış açısıyla yaklaşmak ve unutulmaz anılar biriktirmek istiyorsanız, keşif turizmi tam size göre! Doğanın, tarihin ve farklı kültürlerin izinde çıkacağınız bu yolculuk, hayatınıza yepyeni bir pencere açabilir.</p>
        </div>
    </section>

    <section class="bg-white py-5">
        <div class="container">
            <h3 class="text-center mb-4">Neden Bizi Tercih Etmelisiniz?</h3>
            <div class="row text-center">
                <div class="col-md-4">
                    <h5>🌍 Keşfedilmemiş Rotalar</h5>
                    <p>Turistik kalabalıklardan uzak, doğayla iç içe ve keşfedilmeyi bekleyen rotalar sunuyoruz.</p>
                </div>
                <div class="col-md-4">
                    <h5>🏆 Uzman Rehberler</h5>
                    <p>Alanında uzman, deneyimli ve bilgili rehberler eşliğinde unutulmaz geziler düzenliyoruz.</p>
                </div>
                <div class="col-md-4">
                    <h5>💼 Profesyonel Hizmet</h5>
                    <p>Konfor, güvenlik ve müşteri memnuniyetini ön planda tutarak kaliteli hizmet sağlıyoruz.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white text-center py-3">
        <p>© 2025 Keşif Turizm. Tüm hakları saklıdır.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>