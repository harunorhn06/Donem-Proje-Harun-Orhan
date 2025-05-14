<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kesifturizm";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Rezervasyon ID'lerini çekme (dropdown için)
    $stmt = $conn->query("SELECT id FROM rezervasyon");
    $rezervasyon_ids = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $reservation_id = $_POST['reservation_id']; // Tutarsızlık düzeltildi
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $complaint_text = $_POST['complaint_text'];
        $complaint_date = date('Y-m-d');

        $stmt = $conn->prepare("INSERT INTO sikayet (reservation_id, full_name, email, phone, complaint_text, complaint_date) VALUES (:reservation_id, :full_name, :email, :phone, :complaint_text, :complaint_date)");
        $stmt->execute([
            ':reservation_id' => $reservation_id,
            ':full_name' => $full_name,
            ':email' => $email,
            ':phone' => $phone,
            ':complaint_text' => $complaint_text,
            ':complaint_date' => $complaint_date
        ]);

        $success_message = "Şikayetiniz başarıyla kaydedildi!";
    }
} catch (PDOException $e) {
    $error_message = "Hata: " . $e->getMessage();
}
?>