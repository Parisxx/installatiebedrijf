<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $message = trim($_POST['message']);

    if (!empty($message)) {
        $timestamp = date("Y-m-d H:i:s");

        try {
            $stmt = $pdo->prepare("INSERT INTO emails (message, timestamp) VALUES (:message, :timestamp)");
            $stmt->bindParam(':message', $message);
            $stmt->bindParam(':timestamp', $timestamp);
            $stmt->execute();

            echo "<script>alert('Bericht succesvol verzonden!'); window.history.back();</script>";
        } catch (PDOException $e) {
            echo "<script>alert('Fout bij verzenden: " . $e->getMessage() . "'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Bericht mag niet leeg zijn.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Ongeldige aanvraagmethode.'); window.history.back();</script>";
}

?>