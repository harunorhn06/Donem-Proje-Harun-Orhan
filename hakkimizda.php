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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        .nav-link.active {
            color: #4fd1c5 !important;
            font-weight: 600;
        }

        /* Sections */
        .container {
            max-width: 1300px;
        }
        .bg-light, .bg-white {
            padding: 2rem 0;
        }
        h2, h3 {
            color: #2d3748;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }
        h2::after, h3::after {
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
        h5 {
            color: #2d3748;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .bg-light p {
            font-size: 0.9rem;
            color: #4a5568;
            margin-bottom: 1rem;
            text-align: justify;
        }
        .bg-white .row {
            justify-content: center;
        }
        .bg-white .col-md-4 {
            padding: 20px;
            border-radius: 8px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .bg-white .col-md-4:hover {
            transform: scale(1.05);
        }
        .bg-white p {
            font-size: 0.9rem;
            color: #4a5568;
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
            .bg-light, .bg-white {
                padding: 1.5rem 0;
            }
            h2, h3 {
                font-size: 1.8rem;
            }
            h5 {
                font-size: 1.1rem;
            }
            .bg-light p {
                font-size: 0.85rem;
            }
            .bg-white .col-md-4 {
                padding: 15px;
            }
            .quick-reservation {
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">Keşif Turizm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Ana Sayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link active" href="hakkimizda.php">Hakkımızda</a>
                    <li class="nav-item"><a class="nav-link active" href="gezilerimiz.php">Gezilerimiz</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-light">
        <div class="container"> <br> <br> <br>
            <h2 class="text-center mb-4 fade-in">Biz Kimiz?</h2>
            <p class="text-justify fade-in">Keşfetmek, insanın doğasında var olan bir tutkudur. Keşif turizm ise bu tutkuyu en iyi şekilde tatmin eden seyahat türlerinden biridir. Sıradan tatil anlayışının ötesine geçerek, bilinmeyen rotaları keşfetmek, doğanın ve tarihin derinliklerine dalmak isteyen gezginler için harika bir fırsat sunar.</p>
            <p class="text-justify fade-in">Keşif turizminde amaç, sadece bir yerde vakit geçirmek değil, o yerin ruhunu hissetmek ve benzersiz deneyimler yaşamaktır. Bu, vahşi doğada kamp yapmaktan tarihi kalıntıları incelemeye, geleneksel kültürleri tanımaktan doğal güzellikleri keşfetmeye kadar geniş bir yelpazeye sahiptir.</p>
            <p class="text-justify fade-in">Bu tür seyahatler, macera arayan gezginler için mükemmel bir seçenektir. Sıradan turistik destinasyonlardan uzaklaşarak gizli kalmış koyları keşfetmek, yerel halkla etkileşime geçmek ve doğal yaşamın içinde kaybolmak, keşif turizminin sunduğu en büyük avantajlardan biridir.</p>
            <p class="text-justify fade-in">Keşif turizmi aynı zamanda sürdürülebilir seyahat anlayışıyla da örtüşür. Doğaya ve yerel kültüre zarar vermeden yapılan bu tür geziler, hem gezginler hem de bölge halkı için olumlu etkiler yaratır.</p>
            <p class="text-justify fade-in">Eğer siz de turizme farklı bir bakış açısıyla yaklaşmak ve unutulmaz anılar biriktirmek istiyorsanız, keşif turizmi tam size göre! Doğanın, tarihin ve farklı kültürlerin izinde çıkacağınız bu yolculuk, hayatınıza yepyeni bir pencere açabilir.</p>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <h3 class="text-center mb-4 fade-in">Neden Bizi Tercih Etmelisiniz?</h3>
            <div class="row text-center">
                <div class="col-md-4 fade-in">
                    <h5>🌍 Keşfedilmemiş Rotalar</h5>
                    <p>Turistik kalabalıklardan uzak, doğayla iç içe ve keşfedilmeyi bekleyen rotalar sunuyoruz.</p>
                </div>
                <div class="col-md-4 fade-in">
                    <h5>🏆 Uzman Rehberler</h5>
                    <p>Alanında uzman, deneyimli ve bilgili rehberler eşliğinde unutulmaz geziler düzenliyoruz.</p>
                </div>
                <div class="col-md-4 fade-in">
                    <h5>💼 Profesyonel Hizmet</h5>
                    <p>Konfor, güvenlik ve müşteri memnuniyetini ön planda tutarak kaliteli hizmet sağlıyoruz.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white text-center">
        <div class="container">
            <div class="footer-logo">Keşif Turizm</div>
            <p>© 2025 Keşif Turizm. Tüm hakları saklıdır.</p>
            <div class="social-icons my-3">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            </div>
            <p class="mt-3">İletişim: (0312) 230 06 06 | info@kesifturizm.com</p>
        </div>
    </footer>

    <button class="quick-reservation">Hızlı Rezervasyon</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar Scroll Effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Quick Reservation Button
        document.querySelector('.quick-reservation').addEventListener('click', () => {
            alert('Hızlı rezervasyon için lütfen (0312) 230 06 06 numaralı telefonu arayın!');
        });
    </script>
</body>
</html>