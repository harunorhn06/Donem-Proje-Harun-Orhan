<?php
// PHP kısmı şimdilik boş, gerekirse fotoğraflar veya yorumlar dinamikleştirilebilir
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gezilerimiz - Keşif Turizm</title>
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
            top: 0;
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

        /* Tour Section */
        .tour-section {
            padding: 1rem 0;
            margin-top: 70px; /* Adjusted to account for fixed navbar height */
        }
        .container {
            max-width: 1200px;
        }
        h2 {
            color: #2d3748;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1.5rem;
            position: relative;
            transition: transform 0.2s ease;
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
        h4 {
            color: #2d3748;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        h5 {
            color: #2d3748;
            font-weight: 600;
            margin-bottom: 0.5rem;
            text-align: center;
        }
        p {
            font-size: 0.9rem;
            color: #4a5568;
            margin-bottom: 0.5rem;
        }

        /* Photo Cards */
        .photo-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            overflow: hidden;
        }
        .photo-card:hover {
            transform: scale(1.05);
        }
        .photo-card .carousel-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .photo-card .card-body {
            padding: 1rem;
        }

        /* Testimonial Carousel */
        .testimonial-carousel .carousel-item {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            text-align: center;
        }
        .testimonial-carousel .carousel-item p {
            font-style: italic;
        }
        .testimonial-carousel .stars {
            color: #f4c107;
            margin-bottom: 0.5rem;
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: #4fd1c5;
            border-radius: 50%;
            padding: 1.5rem;
        }
        .carousel-control-prev, .carousel-control-next {
            width: 10%;
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
            .tour-section {
                padding: 0.5rem 0;
                margin-top: 60px; /* Adjusted for smaller navbar height on mobile */
            }
            h2 {
                font-size: 1.8rem;
            }
            .photo-card .carousel-item img {
                height: 150px;
            }
            .quick-reservation {
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }
            .testimonial-carousel .carousel-item {
                padding: 1rem;
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
                    <li class="nav-item"><a class="nav-link" href="hakkimizda.php">Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link active" href="gezilerimiz.php">Gezilerimiz</a></li>
                </ul>
            </div>
        </div>
    </nav>
<br>
<br>
<br>
    <div class="container mt-2 tour-section">
        <h2 class="text-center fade-in">Gezilerimiz</h2>
        
        <div class="row mt-4">
            <div class="col-12">
                <h4 class="fade-in">Çekilmiş Fotoğraflar</h4>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="photo-card fade-in">
                            <div id="photoCarousel1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://www.bizevdeyokuz.com/wp-content/uploads/kapadokya-balon-turu-3-1.jpg" alt="KAPADOKYA">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJptocK-NYUq3M01jmrTWyQTUS4IG-4LZ82Q&s" alt="KAPADOKYA">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZNf0Puy4z3g60bSmUIAYi7LLtTyfEW1o3bQ&s" alt="KAPADOKYA">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Önceki</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Sonraki</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5>Kapadokya Balon Turumuz</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="photo-card fade-in">
                            <div id="photoCarousel2" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGCslXIgLb4nz7rcXyBz9WPXH6ht533yxPbg&s" alt="AMASRA">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://c4.wallpaperflare.com/wallpaper/611/860/1015/amasra-bart%C4%B1n-turkey-island-wallpaper-preview.jpg" alt="AMASRA">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://media.istockphoto.com/id/1372317652/tr/foto%C4%9Fraf/turkeys-very-charming-fishing-town-of-amasra.jpg?s=612x612&w=0&k=20&c=MN4GRRUL_ljtueaOxckyYGodZJou1k0VHOpnikI3hcA=" alt="AMASRA">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Önceki</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Sonraki</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5>Amasra Turumuz </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="photo-card fade-in">
                            <div id="photoCarousel3" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://c1.wallpaperflare.com/preview/434/721/137/landscape-clouds-nature-forest.jpg" alt="SİNOP">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://media.istockphoto.com/id/612737128/tr/foto%C4%9Fraf/the-northernmost-city-of-turkey-sinop.jpg?s=612x612&w=0&k=20&c=Xmtw6HYieHngKMCcQ6wxrKh_rjc46YiDd4QMEA4g1rQ=" alt="SİNOP">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://c1.wallpaperflare.com/preview/910/618/374/lake-forest-waterfall-sinop.jpg" alt="SİNOP">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel3" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Önceki</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel3" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Sonraki</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5>Sinop Turumuz </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="photo-card fade-in">
                            <div id="photoCarousel4" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://c1.wallpaperflare.com/preview/962/60/836/safranbolu-old-house-historic-house-painted-wood-buildings.jpg" alt="SAFRANBOLU">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://cdn.pixabay.com/photo/2020/11/17/18/04/safranbolu-5753251_640.jpg" alt="SAFRANBOLU">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://www.sixt.com.tr/storage/cache/e1d239f79d70e72bd1ce0f7ec7aba1f118ee9cbe.webp" alt="SAFRANBOLU">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel4" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Önceki</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel4" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Sonraki</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5>Safranbolu Evleri </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="photo-card fade-in">
                            <div id="photoCarousel5" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://i.pinimg.com/564x/a4/56/4b/a4564b26a54875051e3cf53aea4c5db1.jpg" alt="ILGAZ">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://kampp.s3.amazonaws.com/IlgazDagi/ilgaz_milli_4.jpg" alt="ILGAZ">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Shades_of_Ilgaz.jpg/1200px-Shades_of_Ilgaz.jpg" alt="ILGAZ">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel5" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Önceki</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel5" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Sonraki</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5>Ilgaz Turumuz </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="photo-card fade-in">
                            <div id="photoCarousel6" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCDKuY2Tt_AwjLoQaoO7gJITxcvSJJye4O6g&s" alt="AKYAZI">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2eUmmB1ApywpVhIKOoOlHsaOTr2_lX9fd3Q&s" alt="AKYAZI">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://www.akyazi.bel.tr/kurumlar/akyazi.bel.tr/Akyazi/yaylalar/DJI_0005.JPG" alt="AKYAZI">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel6" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Önceki</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel6" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Sonraki</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5>Akyazı Turumuz </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="photo-card fade-in">
                            <div id="photoCarousel7" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://i.pinimg.com/736x/09/39/6b/09396b89b284a3372754d36b3c1e44aa.jpg" alt="YEDİGÖLLER">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://c4.wallpaperflare.com/wallpaper/804/390/380/bolu-yedigoller-wallpaper-preview.jpg" alt="YEDİGÖLLER">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/1a/04/77/ac/manzara.jpg" alt="YEDİGÖLLER">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel7" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Önceki</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel7" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Sonraki</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5>YediGöller Turumuz</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="photo-card fade-in">
                            <div id="photoCarousel8" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://www.shutterstock.com/image-photo/beypazari-view-traditional-houses-shops-600nw-2353180739.jpg" alt="BEYPAZARI">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://media.istockphoto.com/id/1756534684/tr/foto%C4%9Fraf/beypazari-district-of-ankara-turkey-aerial-view-of-beypazari-traditional-ottoman-houses-in.jpg?s=612x612&w=0&k=20&c=NrRqVrEmiA2vX407AyXrUJrHNTv-Us9ulrTI-js9ppU=" alt="BEYPAZARI">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://www.shutterstock.com/shutterstock/videos/1110482597/thumb/1.jpg?ip=x480" alt="BEYPAZARI">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel8" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Önceki</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel8" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Sonraki</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5>Beypazarı Turumuz</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="photo-card fade-in">
                            <div id="photoCarousel9" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://wallpapersok.com/images/high/konya-mevlana-museum-at-night-yl3kszl4hg0bxg5e.jpg" alt="KONYA">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://i.ytimg.com/vi/62_FTZwJr0Y/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLAfyzbhi52npYQalch_GukpY1gaxg" alt="KONYA">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://mrwallpaper.com/images/hd/konya-alaaddin-hill-park-h03garwyfm3mk6dk.jpg" alt="KONYA">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel9" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Önceki</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel9" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Sonraki</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <h5>Konya Turumuz </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <h4 class="fade-in">Katılımcı Yorumları</h4>
                    <div id="photoCommentsCarousel" class="carousel slide testimonial-carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active fade-in">
                                <p>"Kapadokya’da balon turu inanılmaz bir deneyimdi! Gökyüzünden peri bacalarını izlemek muhteşemdi."</p>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5>Zeynep Aydın</h5>
                            </div>
                            <div class="carousel-item fade-in">
                                <p>"Amasranın manzarası büyüleyiciydi, tertemiz denizinde yüzmek harikaydı!"</p>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5>Ahmet Şahin</h5>
                            </div>
                            <div class="carousel-item fade-in">
                                <p>"Sinopda doğanın huzurunu hissettim, yerel yemekler de enfesti."</p>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5>Fatma Çelik</h5>
                            </div>
                            <div class="carousel-item fade-in">
                                <p>"Konyada tarihle iç içe bir yolculuk yaptık, rehberler çok bilgiliydi."</p>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5>Murat Özkan</h5>
                            </div>
                            <div class="carousel-item fade-in">
                                <p>"Safranbolu’nun tarihi evleri arasında gezmek, zamanda yolculuk gibiydi."</p>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5>Esra Güler</h5>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#photoCommentsCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Önceki</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#photoCommentsCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Sonraki</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-white text-center">
        <div class="container">
            <div class="footer-logo">Keşif Turizm</div>
            <p>© 2025 Keşif Turizm. Tüm hakları saklıdır.</p>
            <div class="social-icons my-3">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
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

        // Header Scroll Effect
        const header = document.querySelector('h2');
        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;
            header.style.transform = `translateY(${scrollPosition * 0.1}px)`;
            header.style.transition = 'transform 0.2s ease';
        });
    </script>
</body>
</html>