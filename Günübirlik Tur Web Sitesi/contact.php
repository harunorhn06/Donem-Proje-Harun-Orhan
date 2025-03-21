<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    echo "<div class='alert alert-success text-center mt-4'>Mesajınız alındı, $name! Teşekkürler.</div>";
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - Keşif Turizm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .container {
            max-width: 1200px;
        }
        h2, h4 {
            color: #007bff;
        }
        .list-group-item {
            font-size: 14px;
        }
        .form-control {
            font-size: 14px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        footer {
            background-color: #2c3e50;
        }
        a.me-2 {
            text-decoration: none;
            color: #007bff;
        }
        a.me-2:hover {
            color: #0056b3;
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center">İletişim</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>İletişim Bilgileri</h4>
                <p><strong>Adres:</strong> Ankara, Türkiye</p>
                <strong>Telefon:</strong>(0312) 230 06 06
                <p><strong>E-Posta:</strong> info@kesifturizm.com</p>
                <h5>Bizi Takip Edin</h5>
                <a href="#" class="me-2">📘 Facebook</a>
                <a href="#" class="me-2">🐦 Twitter</a>
                <a href="#">📸 Instagram</a>
            </div>
            <div class="col-md-6">
                <h4>Kalkış Yerlerimiz</h4>
                <ul class="list-group">
                    <li class="list-group-item">📍 Kızılay Gama İş Merkezi Önü - 07:00</li>
                    <li class="list-group-item">📍 Bahçelievler Milli Kütüphane - 07:10</li>
                    <li class="list-group-item">📍 Armada AVM Önü - 07:20</li>
                    <li class="list-group-item">📍 Kentpark (AWM) Önü - 07:25</li>
                    <li class="list-group-item">📍 Ümitköy Köprüsü Altı - 07:30</li>
                    <li class="list-group-item">📍 Koru Sitesi Kavşağı - 07:35</li>
                </ul>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <h4>Öneri ve Şikayet</h4>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Adınız</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Posta</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mesajınız</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>
            </div>
            <div class="col-md-6">
                <h4>Konumumuz</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31207.743257447424!2d32.8540115!3d39.9207886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34ef97e3ef2b1%3A0x8fbc8c84b0ecb4e5!2sAnkamall!5e0!3m2!1str!2str!4v1715800000000!5m2!1str!2str" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>© 2025 Keşif Turizm. Tüm hakları saklıdır.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 