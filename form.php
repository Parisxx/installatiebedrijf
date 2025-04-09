<?php
require_once 'db.php'; // zorg dat dit pad klopt

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $adress = htmlspecialchars($_POST['adress']);
    $zipcode = htmlspecialchars($_POST['zipcode']);
    $message = htmlspecialchars($_POST['message']);

    if ($email) {
        $to = "parisstassen@gmail.com"; 
        $subject = "Nieuw contactbericht";
        $body = "Voornaam: $name\nAchternaam: $lastname\nE-mail: $email\nAdres: $adress\nPostcode/Woonplaats: $zipcode\n\nBericht:\n$message";
        $headers = "From: $email";

        mail($to, $subject, $body, $headers);

        $stmt = $pdo->prepare("INSERT INTO emails (message, date) VALUES (?, NOW())");
        $stmt->execute([$message]);

        echo "Bedankt voor je bericht!";
    } else {
        echo "Ongeldig e-mailadres.";
    }
} else {
    echo "Ongeldige verzoeksmethode.";
}


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php'; // als je Composer gebruikt
// // of: require 'PHPMailer/PHPMailer.php'; etc. bij handmatige installatie

// $mail = new PHPMailer(true);

// try {
//     // Serverinstellingen
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->Username = 'jouw@gmail.com'; // Jouw Gmail
//     $mail->Password = 'app-wachtwoord'; // Geen gewoon wachtwoord!
//     $mail->SMTPSecure = 'tls';
//     $mail->Port = 587;

//     // Ontvanger + afzender
//     $mail->setFrom($email, $voornaam . ' ' . $achternaam);
//     $mail->addAddress('jouw@gmail.com'); // Naar jezelf

//     // Inhoud
//     $mail->isHTML(false);
//     $mail->Subject = 'Nieuw contactbericht';
//     $mail->Body = "Voornaam: $voornaam\nAchternaam: $achternaam\nE-mail: $email\nAdres: $adres\nPostcode/Woonplaats: $postcode\n\nBericht:\n$bericht";

//     $mail->send();
//     echo "E-mail verzonden!";
// } catch (Exception $e) {
//     echo "Mail fout: {$mail->ErrorInfo}";
// }
?>