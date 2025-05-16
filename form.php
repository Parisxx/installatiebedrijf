<?php
// Database connection and PHPMailer setup
require_once 'db.php';
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get and clean form data
    $message = htmlspecialchars(trim($_POST['message']));
    $name = htmlspecialchars(trim($_POST['name']));
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $address = htmlspecialchars(trim($_POST['address']));
    $zipcode = htmlspecialchars(trim($_POST['zipcode']));
    $recaptcha_response = $_POST['g-recaptcha-response']; 

    // Verify Google reCAPTCHA
    $secret_key = $_ENV['RECAPTCHA_SECRET'];
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $response = file_get_contents($recaptcha_url . '?secret=' . $secret_key . '&response=' . $recaptcha_response);
    $response_keys = json_decode($response, true);

    if ($response_keys["success"]) {  // If captcha OK

        if (!empty($message)) {  // If message not empty

            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('Ongeldig e-mailadres.'); window.history.back();</script>";
                exit;
            }

            $timestamp = date("Y-m-d H:i:s");

            try {
                // Save message and time in database
                $stmt = $pdo->prepare("INSERT INTO emails (message, timestamp) VALUES (:message, :timestamp)");
                $stmt->bindParam(':message', $message);
                $stmt->bindParam(':timestamp', $timestamp);
                $stmt->execute();

                // Prepare and send email
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = $_ENV['SMTP_HOST'];
                $mail->SMTPAuth = true;
                $mail->Username = $_ENV['SMTP_USER'];
                $mail->Password = $_ENV['SMTP_PASS']; 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('info@stassen-installatie.nl', 'Stassen Installatie');
                $mail->addAddress('info@stassen-installatie.nl', 'Recipient');

                $mail->isHTML(true);
                $mail->Subject = 'Nieuw Contactformulier Verzoek';

                // Email body with user's data and message
                $mail->Body = "
                <html>
                <body>
                    <p><img src='cid:company_logo' alt='Company Logo' style='max-width: 150px;'></p>
                    
                    <p><strong>Naam:</strong> " . htmlspecialchars($name) . " " . htmlspecialchars($lastname) . "</p>
                    <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                    <p><strong>Adres:</strong> " . htmlspecialchars($address) . "</p>
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
                // Database error
                echo "<script>alert('Er is iets misgegaan. Probeer het later opnieuw.'); window.history.back();</script>";

            } catch (Exception $e) {
                // Email sending error
                echo "<script>alert('Er is iets misgegaan. Probeer het later opnieuw.'); window.history.back();</script>";
            }

        } else {
            // Message empty error
            echo "<script>alert('Bericht mag niet leeg zijn.'); window.history.back();</script>";
        }

    } else {
        // reCAPTCHA failed
        echo "<script>alert('reCAPTCHA verificatie mislukt. Probeer opnieuw.'); window.history.back();</script>";
    }

} else {
    // Wrong request method
    echo "<script>alert('Ongeldige aanvraagmethode.'); window.history.back();</script>";
}
?>
