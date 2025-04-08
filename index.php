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
            <li><a href="#">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Diensten
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="dropdown-arrow">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </a>
                <ul class="dropdown-content">
                    <li><a href="#">Electro</a></li>
                    <li><a href="#">Gas</a></li>
                    <li><a href="#">Water</a></li>
                    <li><a href="#">Cv</a></li>
                    <li><a href="#">Sanitair</a></li>
                    <li><a href="#">Luchtbehandeling</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <!-- Off-canvas menu -->
    <div class="off-canvas" id="offCanvasMenu">
        <div class="off-canvas-header">
            <div class="close-btn" onclick="toggleMenu()">&#10005;</div>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li class="off-canvas-dropdown" id="dienstenMenu">
                <a href="#" class="dropbtn_off-canvas">Diensten 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="off-canvas-dropdown-arrow">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </a>
                <ul class="off-canvas-dropdown-content">
                    <li><a href="#">Electro</a></li>
                    <li><a href="#">Gas</a></li>
                    <li><a href="#">Water</a></li>
                    <li><a href="#">Cv</a></li>
                    <li><a href="#">Sanitair</a></li>
                    <li><a href="#">Luchtbehandeling</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <!-- Hero section -->
    <header class="hero">
        <div class="hero-text">
            <h1>Welkom</h1>
            <p>Bij dé installatiespecialist van Zuid-Limburg!</p>
        </div>
    </header>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('offCanvasMenu');
            menu.classList.toggle('open');
        }
    </script>

</body>
</html>
