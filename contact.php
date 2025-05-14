<?php
// PHP code can be added here if needed for form processing
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - Keşif Turizm</title>
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
        .navbar-text {
            color: white;
            font-size: 1.2rem;
            font-weight: 400;
            transition: color 0.3s ease;
            animation: fadeInUp 0.6s ease-in-out;
        }
        .navbar-text:hover {
            color: #4fd1c5;
        }

        /* Contact Section */
        .contact-section {
            padding: 1rem 0;
            margin-top: 70px; /* Adjusted to account for fixed navbar height */
        }
        .container {
            max-width: 1200px;
        }
        h4 {
            color: #2d3748;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
        }
        h4::after {
            content: '';
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, #4fd1c5, #4299e1);
            position: absolute;
            bottom: -8px;
            left: 0;
            border-radius: 2px;
        }
        p {
            font-size: 0.9rem;
            color: #4a5568;
            margin-bottom: 0.5rem;
        }

        /* Kalkış Yerleri */
        .list-group-item {
            background: white;
            border: none;
            border-left: 5px solid #4fd1c5;
            border-radius: 8px;
            margin-bottom: 8px;
            padding: 1rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .list-group-item:hover {
            background-color: #e6fffa;
            transform: translateX(5px);
        }

        /* Öneri ve Şikayet Formu */
        form {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            border: 1px solid #e2e8f0;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #4fd1c5;
            box-shadow: 0 0 5px rgba(79, 209, 197, 0.3);
        }
        .btn-primary {
            background: linear-gradient(to right, #4fd1c5, #4299e1);
            border: none;
            border-radius: 9999px;
            padding: 0.6rem 1.8rem;
            transition: background 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #4299e1, #4fd1c5);
        }

        /* Harita */
        iframe {
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            height: 250px;
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
            .contact-section {
                padding: 0.5rem 0;
                margin-top: 60px; /* Adjusted for smaller navbar height on mobile */
            }
            h4 {
                font-size: 1.5rem;
            }
            .list-group-item {
                font-size: 0.85rem;
                padding: 0.75rem;
            }
            iframe {
                height: 200px;
            }
            .quick-reservation {
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }
            .navbar-text {
                font-size: 0.9rem;
            }
            form {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="index.php">Keşif Turizm</a>
            <span class="navbar-text mx-auto d-none d-md-inline fade-in">Türkiye’yi Keşfet!</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Ana Sayfa</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="hakkimizda.php">Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link" href="gezilerimiz.php">Gezilerimiz</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-2 contact-section">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h4 class="fade-in">Kalkış Yerlerimiz</h4>
                <ul class="list-group">
                    <li class="list-group-item fade-in">📍 Kızılay Gama İş Merkezi Önü - 07:00</li>
                    <li class="list-group-item fade-in">📍 Bahçelievler Milli Kütüphane - 07:10</li>
                    <li class="list-group-item fade-in">📍 Armada AVM Önü - 07:20</li>
                    <li class="list-group-item fade-in">📍 Kentpark (AWM) Önü - 07:25</li>
                    <li class="list-group-item fade-in">📍 Ümitköy Köprüsü Altı - 07:30</li>
                    <li class="list-group-item fade-in">📍 Koru Sitesi Kavşağı - 07:35</li>
                </ul>
            </div>
            <div class="col-md-6 mb-4">
                <h4 class="fade-in">Kalkış Noktaları Haritası</h4>
                <iframe class="fade-in" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31207.743257447424!2d32.8540115!3d39.9207886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34ef97e3ef2b1%3A0x8fbc8c84b0ecb4e5!2sAnkamall!5e0!3m2!1str!2str!4v1715800000000!5m2!1str!2str" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <h4 class="fade-in">Öneri ve Şikayet</h4>
                <form method="post" action="" class="fade-in">
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

        // Form Submission
        const form = document.querySelector('form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = form.querySelector('#name').value;
            const email = form.querySelector('#email').value;
            const message = form.querySelector('#message').value;

            if (name && email.includes('@') && message) {
                form.style.transition = 'opacity 0.5s ease';
                form.style.opacity = '0';
                setTimeout(() => {
                    form.style.display = 'none';
                    const successMsg = document.createElement('div');
                    successMsg.classList.add('alert', 'alert-success', 'text-center', 'mt-3', 'fade-in');
                    successMsg.textContent = `Mesajınız alındı, ${name}! Teşekkürler.`;
                    form.parentElement.appendChild(successMsg);
                }, 500);
            } else {
                alert('Lütfen tüm alanları doğru şekilde doldurun!');
            }
        });

        // Email Input Validation
        const emailInput = document.querySelector('#email');
        emailInput.addEventListener('input', () => {
            if (!emailInput.value.includes('@')) {
                emailInput.style.borderColor = '#dc3545';
            } else {
                emailInput.style.borderColor = '#4fd1c5';
            }
        });

        // List Item Tooltips
        document.querySelectorAll('.list-group-item').forEach(item => {
            item.setAttribute('data-bs-toggle', 'tooltip');
            item.setAttribute('data-bs-placement', 'right');
            item.setAttribute('title', 'Bu noktadan kalkış saatinde hazır olun!');
            new bootstrap.Tooltip(item);
        });

        // Social Icons Animation
        document.querySelectorAll('.social-icons a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                link.style.transition = 'transform 0.3s ease';
                link.style.transform = 'rotate(360deg)';
                setTimeout(() => {
                    window.open(link.href, '_blank');
                    link.style.transform = 'rotate(0)';
                }, 300);
            });
        });

        // Map Hover Effect
        const mapIframe = document.querySelector('iframe');
        mapIframe.style.transition = 'transform 0.5s ease';
        mapIframe.addEventListener('mouseenter', () => {
            mapIframe.style.transform = 'scale(1.05)';
        });
        mapIframe.addEventListener('mouseleave', () => {
            mapIframe.style.transform = 'scale(1)';
        });
    </script>
</body>
</html>