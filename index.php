<?php 
  //connect to db 
  require("database.php");
?>

<!DOCTYPE html> 

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover">

        <title>Home | Jouream</title>

        <!-- google font link -->
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Nunito:wght@400;700&family=Red+Hat+Text:wght@700&display=swap" rel="stylesheet">
        
        <!-- Linked Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/main.css"> 
        <link rel="stylesheet" type="text/css" href="css/grids.css"> 
        <link rel="stylesheet" type="text/css" href="css/index.css"> 

    </head>

    <body class="main-body-grid">
        <div class="body-wrapper">
            <header>
                <!-- navigation -->
                <nav>
                    <p class="logo">LOGO</p>
                    <a href="index.php">Home</a>
                    <a href="explore.php">Explore</a>

                    <!-- **IMPORTANT**: CHANGE SIGN UP AFTER AUTHENTICATION IMPLEMENTATION -->
                    <a href="login.php" class="last-link">Login/Sign Up</a>
                </nav>
            </header>

            <!-- hero/landing -->
            <section id="main" class="hero-container">
                <h1 class="brand">Jouream</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium molestie lectus eget molestie. Aenean ac est justo. Morbi auctor quam quis facilisis.</p>

                <!-- CTA -->
                <div class="cta-container">
                    <a href="" class="cta">Start Journaling Your Dreams</a>
                </div>
            </section>

            <!-- about blurb -->
            <section id="about">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium molestie lectus eget molestie. Aenean ac est justo. Morbi auctor quam quis facilisis.</p>
            </section>

            <!-- recent entries -->
            <section id="recent-entries">
                <h2>Recent Entries</h2>
                <div class="entry-card">
                    <h3 class="entry-card-title">Vampire Baseball</h3>
                    <p class="entry-card-date">June 13, 2021</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium molestie lectus eget molestie. Aenean ac est justo. Morbi auctor quam quis facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium molestie.</p>

                    <!-- tags -->
                    <a href="" class="entry-card-link">#vampire</a>
                    
                    <hr class="entry-card-line">
                    <div class="cont-reading">
                        <a href="" class="entry-card-link">continue reading <img src="img/right-arrow.svg" alt="right arrow icon"></a>
                    </div>
                </div>
            </section>
        </div>

        <!-- footer -->
        <footer>
            <!-- branding -->
            <div class="branding">
                <h2 class="brand">Jouream</h2>
                <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="copyright">© 2021 Carissa Shum & Rowina Chan</p>
            </div>

            <!-- navigation -->
            <div class="footer-nav">
                <h3>Navigation</h3>
                <a href="index.php">Home</a>
                <a href="explore.php">Explore</a>
                <a href="index.php/#about">About</a>

                <!-- **IMPORTANT**: CHANGE FOOTER CONTENT AFTER AUTHENTICATION IMPLEMENTATION -->
                <a href="entries.php">Entries</a>
                <a href="account.php">Account</a>
            </div>

            <!-- resources -->
            <div class="resources">
                <h3>Resources</h3>
                <a href="style-guide.php">Style Guide</a>
                <a href="citations.html">Citations</a>
            </div>
        </footer>

    
    </body> 
</html>