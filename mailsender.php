<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';
require 'settings.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = "$username_mail";                     // SMTP username
    $mail->Password   = "$username_pwd";                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    session_start();
    $getmail = $_SESSION["email"];
    $mail->setFrom('xyz@gmail.com', 'XYZ Support');
    $mail->addAddress("$getmail");     // Add a recipient
    $mail->addReplyTo('xyz@gmail.com');



    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'XYZ';
    $mail->Body    = "$msg";

    $mail->send();
    header('location: index.php');
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}