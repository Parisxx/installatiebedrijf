<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM projects");
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installatiebedrijf Stassen</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/x-icon" href="src\img\icon.png">
</head>
<body>

 <!-- Navbar -->
    <nav class="navbar">
        <img src="src\img\logo.png" alt="Logo" class="logo">
        <!-- hamburger icon -->
        <div class="hamburger" onclick="toggleMenu()">
            &#9776; 
        </div>
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

    <!-- Hero section -->
    <header class="hero">
        <div class="hero-text">
            <h1>Welkom</h1>
            <p>Bij dé installatiespecialist van Zuid-Limburg!</p>
        </div>
    </header>

    <section class="content-section">
        <div class="content-text">
            <h2>Ervaren vakmanschap</h2>
            <p>Wij zijn een erkend installateur en staan voor vakmanschap, vakkundig advies en hoogwaardige producten. 
                Wij zijn een gespecialiseerd totaal installateur voor particulieren en zakelijke klanten.
                Bij ons kunt u terecht voor alle nieuwbouw, verbouw en renovaties.
                Ook voor service en onderhoud aan uw cv ketel. </p>
        </div>
        <div class="content-image">
            <img src="src/img/men_blue.png" alt="Description of the image" class="service-img">
        </div>
    </section>

    <div class="wrapper">
        <div class="button-container">
            <a href="services.php?id=1" class="round-button">Electro</a>
            <a href="services.php?id=2" class="round-button">Gas</a>
            <a href="services.php?id=3" class="round-button">Water</a>
            <a href="services.php?id=4" class="round-button">Cv</a>
            <a href="services.php?id=5" class="round-button">Sanitair</a>
            <a href="services.php?id=6" class="round-button">Luchtbehandeling</a>
        </div>
    </div>

    <section class="banner">
        <div class="banner-content">
            <h2>Van elektra tot sanitair – vakkundig, betrouwbaar en duurzaam!</h2>
            <a href="contact.php" class="banner-button">Neem contact op</a>
        </div>
    </section>

    <div class="projects">
        <h2 id="projects" class="title">Onze projecten</h2>

        <div class="slideshow-container">
            <?php
            $totalSlides = count($projects);
            $visibleSlides = 3;
            $slidesToClone = $visibleSlides;
            foreach ($projects as $project): ?>
                <div class="slide">
                    <img src="src/img/<?php echo $project['image']; ?>" alt="Project Image">
                </div>
            <?php endforeach; ?>

            <?php for ($i = 0; $i < $slidesToClone; $i++): ?>
                <div class="slide duplicate">
                    <img src="src/img/<?php echo $projects[$i]['image']; ?>" alt="Project Image">
                </div>
            <?php endfor; ?>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div class="dots-container">
            <?php for ($i = 0; $i < count($projects); $i++): ?>
            <span class="dot" onclick="currentSlide(<?php echo $i; ?>)"></span>
            <?php endfor; ?>
        </div>
    </div>


    <div class="image-row">
        <img class="image-left" src="src/img/certficaat_1.png" alt="">
        <img class="image-right" src="src/img/certficaat_2.png" alt="">
    </div>

    <footer>
        <div class="footer-row left">
            <h3>Installatiebedrijf Stassen</h3>
            <p>Groenenweg 42, 6294 ND Vijlen, Nederland</p>
            <p>06 520 875 39</p>
            <p><a href="mailto:info@stassen-installatie.nl">info@stassen-installatie.nl</a></p>
        </div>
        <div class="footer-row right">
            <p>KVK: 14068934</p>
            <p>BTW: NL001814572B39</p>
            <p>IBAN: NL37 RABO 0116 0171 12</p>

        </div>
        <div class="footer-info">
            <p>&copy; 2025 Installatiebedrijf Stassen</p>
            <p><a href="privacy.php">Privacy verklaring</a></p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
