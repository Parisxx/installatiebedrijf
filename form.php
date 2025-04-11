<?php
require_once 'db.php';
require 'vendor/autoload.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $message = trim($_POST['message']);
    $name = trim($_POST['name']);
    $lastmame = trim($_POST['lastmame']);
    $email = trim($_POST['email']);
    $adress = trim($_POST['adress']);
    $zipcode = trim($_POST['zipcode']);

    if (!empty($message)) {
        $timestamp = date("Y-m-d H:i:s");

        try {
            $stmt = $pdo->prepare("INSERT INTO emails (message, timestamp) VALUES (:message, :timestamp)");
            $stmt->bindParam(':message', $message);
            $stmt->bindParam(':timestamp', $timestamp);
            $stmt->execute();

            // Send the email using PHPMailer
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'parisstassen@gmail.com';
            $mail->Password = 'ozpk hdst pcdq ngnf';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('parisstassen@gmail.com', 'Paris');
            $mail->addAddress('parisstassen@gmail.com', 'Recipient');

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body    = "<h1>New Message from $name $lastmame</h1>
                            <p>Email: $email</p>
                            <p>Address: $adress</p>
                            <p>Zipcode: $zipcode</p>
                            <p>Message: $message</p>";

            $mail->send();
            
            echo "<script>alert('Bericht succesvol verzonden en email verstuurd!'); window.history.back();</script>";
        } catch (PDOException $e) {
            echo "<script>alert('Fout bij verzenden naar database: " . $e->getMessage() . "'); window.history.back();</script>";
        } catch (Exception $e) {
            echo "<script>alert('Fout bij het versturen van de e-mail: " . $mail->ErrorInfo . "'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Bericht mag niet leeg zijn.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Ongeldige aanvraagmethode.'); window.history.back();</script>";
}
?>
