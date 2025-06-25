<?php
// 1. DEBUG DISPLAY
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. HEADER
header("Content-Type: application/json; charset=utf-8");

// 3. เช็ค method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["step" => "method", "error" => "Only POST"]);
    exit;
}

// 4. เช็คว่า autoload ใช้งานได้ไหม
$autoload = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoload)) {
    echo json_encode(["step" => "autoload", "error" => "ไม่พบไฟล์ autoload.php"]);
    exit;
}

require $autoload;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// 5. รับ JSON input
$data = json_decode(file_get_contents("php://input"), true);

// 6. เช็คค่าที่รับมา
$name = trim($data['name'] ?? '');
$email = trim($data['email'] ?? '');
$message = trim($data['message'] ?? '');

if (!$name || !$email || !$message) {
    echo json_encode([
        "step" => "input",
        "error" => "data is emty",
        "debug" => compact('name', 'email', 'message')
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["step" => "email", "error" => "Wrong with email"]);
    exit;
}
require_once __DIR__ . '/../config/emailconfig.php';



// 7. ตั้งค่า PHPMailer
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = EMAIL_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = EMAIL_USERNAME;
    $mail->Password = EMAIL_PASSWORD;
    $mail->SMTPSecure = EMAIL_SECURE;
    $mail->Port = EMAIL_PORT;

    $mail->CharSet = 'UTF-8';
    $mail->setFrom(EMAIL_FROM, EMAIL_FROM_NAME);
    $mail->addAddress('pasitohm01@gmail.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(false);
    $mail->Subject = "📬 New message from: $name";
    $mail->Body = <<<TEXT
name: $name
email: $email

message:
$message
TEXT;

    $mail->send();
    echo json_encode(["success" => true, "message" => "ส่งเมลสำเร็จ"]);
} catch (Exception $e) {
    echo json_encode([
        "step" => "send",
        "error" => "Failed to send: {$mail->ErrorInfo}",
        "exception" => $e->getMessage()
    ]);
}
