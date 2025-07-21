<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'dagzz23123456789@gmail.com';
    $mail->Password = 'zknd qwdg jkzp dtui';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->SMTPKeepAlive = false; // Optional: true if in loop
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ];

    $mail->setFrom($_POST['email'], 'Website Mailer');
    $mail->addAddress('dagzz23123456789@gmail.com', 'Admin');
    $mail->addAddress('enriquejhonmarka@gmail.com', 'Admin');

    $mail->isHTML(true);
    $mail->Subject = 'New Waitlist Signup';
    $mail->AddEmbeddedImage('assets/Logos/JPEG/fullfix.jpg', 'bannerimg');

    $mail->Body = '
    <div style="font-family: Arial, sans-serif; padding: 20px; color: #333; background-color: #f9f9f9;">
        <div style="text-align: center; margin-bottom: 30px;">
            <img src="cid:bannerimg" alt="Banner" style="max-width: 100%; height: auto;">
        </div>
        <h2 style="color: #004080;">New Waitlist Registration</h2>
        <p>Dear Admin,</p>
        <p>A new user has joined the waitlist. Here are the details:</p>
        <ul style="line-height: 1.6;">
            <li><strong>Name:</strong> ' . htmlspecialchars($_POST['firstname'] . ' ' . $_POST['lastname']) . '</li>
            <li><strong>Email:</strong> ' . htmlspecialchars($_POST['email']) . '</li>
        </ul>
        <p>Please take the necessary action or contact them if needed.</p>
        <p style="margin-top: 30px;">Regards,<br><strong>ClientBook</strong></p>
    </div>';


    $mail->send();
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $mail->ErrorInfo]);
}
