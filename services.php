<?php
require 'db.php'; 

$service_id = isset($_GET['id']) && is_numeric($_GET['id']) ? (int)$_GET['id'] : 0;

if ($service_id <= 0) {
    exit("Invalid service ID.");
}

$stmt = $pdo->prepare("SELECT * FROM services WHERE id = :service_id");
$stmt->execute(['service_id' => $service_id]);
$service = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$service) {
    exit("Service not found.");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service - <?php echo htmlspecialchars($service['title']); ?></title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/x-icon" href="src\img\icon.png">
    <script src="script.js"></script>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <img src="src\img\logo.png" alt="Logo" class="logo">
        <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
                <a class="dropbtn">Diensten
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="dropdown-arrow">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </a>
                <ul class="dropdown-content">
                    <li><a href="services.php?id=1">Electro</a></li>
                    <li><a href="services.php?id=2">Gas</a></li>
                    <li><a href="services.php?id=3">Water</a></li>
                    <li><a href="services.php?id=4">Cv</a></li>
                    <li><a href="services.php?id=5">Sanitair</a></li>
                    <li><a href="services.php?id=6">Luchtbehandeling</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <!-- Off-canvas menu -->
    <div class="off-canvas" id="offCanvasMenu">
        <div class="off-canvas-header">
            <div class="close-btn" onclick="toggleMenu()">&#10005;</div>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="off-canvas-dropdown" id="dienstenMenu">
                <a class="dropbtn_off-canvas">Diensten
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="off-canvas-dropdown-arrow">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </a>
                <ul class="off-canvas-dropdown-content">
                    <li><a href="services.php?id=1">Electro</a></li>
                    <li><a href="services.php?id=2">Gas</a></li>
                    <li><a href="services.php?id=3">Water</a></li>
                    <li><a href="services.php?id=4">Cv</a></li>
                    <li><a href="services.php?id=5">Sanitair</a></li>
                    <li><a href="services.php?id=6">Luchtbehandeling</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <!-- Service section -->

    <div class="service-container">
        <h1> Dit is een test</h1>
        <h1> Dit is een test</h1>

        <h1><?php echo htmlspecialchars($service['title']); ?></h1>
        <img src="src/img/<?php echo htmlspecialchars($service['image']); ?>" alt="<?php echo htmlspecialchars($service['title']); ?>" class="service-img">
        <p><?php echo nl2br(htmlspecialchars($service['description'])); ?></p>
    </div>


</body>
</html>