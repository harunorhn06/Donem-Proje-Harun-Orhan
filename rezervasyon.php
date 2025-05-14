<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kesifturizm";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}

// Form gönderimini işle
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tour_name = htmlspecialchars($_POST['tour_name']);
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $reservation_date = htmlspecialchars($_POST['reservation_date']);

    // Girdileri doğrula
    if (empty($tour_name) || empty($full_name) || empty($email) || empty($phone) || empty($reservation_date)) {
        $error = "Lütfen tüm alanları doldurun.";
    } else {
        try {
            $stmt = $conn->prepare("INSERT INTO rezervasyon (tour_name, full_name, email, phone, reservation_date) VALUES (:tour_name, :full_name, :email, :phone, :reservation_date)");
            $stmt->bindParam(':tour_name', $tour_name);
            $stmt->bindParam(':full_name', $full_name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':reservation_date', $reservation_date);
            $stmt->execute();
            $success = "Rezervasyonunuz başarıyla alındı!";
        } catch (PDOException $e) {
            $error = "Hata: " . $e->getMessage();
        }
    }
}

// URL'den tur adını al
$tour_name = isset($_GET['tur']) ? htmlspecialchars($_GET['tur']) : '';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervasyon Yap - Keşif Turizm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fa;
            padding: 20px;
        }
        .reservation-form {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background: linear-gradient(to right, #4fd1c5, #4299e1);
            border: none;
            border-radius: 9999px;
        }
        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="reservation-form">
        <h2 class="text-center">Rezervasyon Yap</h2>
        <?php if (isset($success)): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php elseif (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" action="rezervasyon.php">
            <div class="mb-3">
                <label for="tour_name" class="form-label">Tur Adı</label>
                <input type="text" class="form-control" id="tour_name" name="tour_name" value="<?php echo $tour_name; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="full_name" class="form-label">Ad Soyad</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-posta</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefon</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="reservation_date" class="form-label">Rezervasyon Tarihi</label>
                <input type="date" class="form-control" id="reservation_date" name="reservation_date" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Rezervasyonu Tamamla</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>