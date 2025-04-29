<?php
require_once 'db.php';
require 'vendor/autoload.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $message = htmlspecialchars(trim($_POST['message']));
    $name = htmlspecialchars(trim($_POST['name']));
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $adress = htmlspecialchars(trim($_POST['adress']));
    $zipcode = htmlspecialchars(trim($_POST['zipcode']));
    $recaptcha_response = $_POST['g-recaptcha-response']; 

    // reCAPTCHA
    $secret_key = '6LfY_hMrAAAAAGf0GREw7at2UBAEmMxe4osBUO76';

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $response = file_get_contents($recaptcha_url . '?secret=' . $secret_key . '&response=' . $recaptcha_response);
    $response_keys = json_decode($response, true);

    if ($response_keys["success"]) {
        if (!empty($message)) {
            // Validate email 
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('Ongeldig e-mailadres.'); window.history.back();</script>";
                exit;
            }

            $timestamp = date("Y-m-d H:i:s");

            try {
                // Insert into database
                $stmt = $pdo->prepare("INSERT INTO emails (message, timestamp) VALUES (:message, :timestamp)");
                $stmt->bindParam(':message', $message);
                $stmt->bindParam(':timestamp', $timestamp);
                $stmt->execute();

                // Send email
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.stassen-installatie.nl';
                $mail->SMTPAuth = true;
                $mail->Username = 'info@stassen-installatie.nl';  
                $mail->Password = 'StaS1NstAl!4876#';   
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('info@stassen-installatie.nl', 'Stassen Installatie');
                $mail->addAddress('info@stassen-installatie.nl', 'Recipient');

                $mail->isHTML(true);
                $mail->Subject = 'Nieuw Contactformulier Verzoek';

                $mail->Body    = "
                <html>
                <body>
                    <p><img src='cid:company_logo' alt='Company Logo' style='max-width: 150px;'></p>
                    
                    <p><strong>Naam:</strong> " . htmlspecialchars($name) . " " . htmlspecialchars($lastname) . "</p>
                    <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                    <p><strong>Adres:</strong> " . htmlspecialchars($adress) . "</p>
                    <p><strong>Postcode:</strong> " . htmlspecialchars($zipcode) . "</p>
                    
                    <p><strong>Bericht:</strong></p>
                    <p>" . nl2br(htmlspecialchars($message)) . "</p>
                </body>
                </html>
                ";


                $mail->AddEmbeddedImage('src/img/logo.png', 'company_logo', 'logo.png');

                $mail->send();

                echo "<script>alert('Bericht succesvol verzonden!'); window.history.back();</script>";

            } catch (PDOException $e) {
                echo "<script>alert('Er is iets misgegaan. Probeer het later opnieuw.'); window.history.back();</script>";

            } catch (Exception $e) {
                echo "<script>alert('Er is iets misgegaan. Probeer het later opnieuw.'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('Bericht mag niet leeg zijn.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('reCAPTCHA verificatie mislukt. Probeer opnieuw.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Ongeldige aanvraagmethode.'); window.history.back();</script>";
}
?>
