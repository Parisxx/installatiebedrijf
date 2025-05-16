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
                    <li><a href="services.php?id=1">Elektro</a></li>
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
                    <li><a href="services.php?id=1">Elektro</a></li>
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

    <!-- Banner foto -->

    <div class="contact-banner">
        <img src="src/img/banner_contact.png" alt="Contact banner">
    </div>

    <!-- Contact form -->

    <div class="contact-container">
        <h4>We horen graag van je</h4>
        <h1>Contact opnemen</h1>
        
        <!-- Form sends data to form.php -->
        <form action="form.php" method="POST">
            <div class="input-row">
                <input type="text" name="name" placeholder="Voornaam *" required>
                <input type="text" name="lastname" placeholder="Achternaam *" required> 
            </div>
            <input type="email" name="email" placeholder="Email-adres *" required>
            <input type="text" name="adress" placeholder="Adres en woonplaats *" required> 
            <input type="text" name="zipcode" placeholder="Postcode *" required>
            <textarea name="message" placeholder="Uw reactie of bericht *" required></textarea>
            
            <!-- Google reCAPTCHA -->
            <div class="captcha">
                <div class="g-recaptcha" data-sitekey="6LfY_hMrAAAAAJcjk_CRvbjPFkns2ZMaj3krCs4L"></div>
            </div>
            
            <button type="submit">Verstuur informatie</button>
        </form>
    </div>
    <!-- Footer -->

    <footer>
        <div class="footer-row">
            <h3>Installatiebedrijf Stassen</h3>
            <p>Groenenweg 42, 6294 ND Vijlen, Nederland</p>
            <p>06 520 875 39</p>
            <p><a href="mailto:info@stassen-installatie.nl">info@stassen-installatie.nl</a></p>
                <a href="https://www.facebook.com/StassenInstallatiebedrijf" target="_blank">
                    <svg width="14px" height="14px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg">
                        <path fill="white" d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"/>
                    </svg>
                </a>
        </div>
        <div class="footer-row">
            <p>KVK: 14068934</p>
            <p>BTW: NL001814572B39</p>
            <p>IBAN: NL37 RABO 0116 0171 12</p>

        </div>
        <div class="footer-row">
        <p>&copy; 2025 Installatiebedrijf Stassen</p>
        <p><a href="privacy.php">Privacy verklaring</a></p>
    </footer>


    <script src="script.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
</body>
</html>