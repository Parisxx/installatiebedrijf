<?php
$host = 'localhost'; 
$dbname = 'installatiebedrijf';
$username = 'Examendrie';
$password = 'KeQc1#E8ktxdu2m#';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error connecting to database: " . $e->getMessage());
}
?>