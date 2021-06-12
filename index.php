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
            <section id="main">
                <h1>Jouream</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium molestie lectus eget molestie. Aenean ac est justo. Morbi auctor quam quis facilisis.</p>

                <!-- CTA -->
                <a href="">Start Journaling Your Dreams</a>
            </section>

            <!-- about blurb -->
            <section id="about">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium molestie lectus eget molestie. Aenean ac est justo. Morbi auctor quam quis facilisis.</p>
            </section>

            <!-- recent entries -->
            <section id="recent-entries">
            </section>

            <!-- footer -->
            <footer>
                <!-- branding -->
                <div>
                    <h3>Jouream</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>© 2021 Carissa Shum & Rowina Chan</p>
                </div>

                <!-- navigation -->
                <div>
                    <h3>Navigation</h3>
                    <a href="index.php">Home</a>
                    <a href="explore.php">Explore</a>
                    <a href="index.php/#about">About</a>

                    <!-- **IMPORTANT**: CHANGE FOOTER CONTENT AFTER AUTHENTICATION IMPLEMENTATION -->
                    <a href="entries.php">Entries</a>
                    <a href="account.php">Account</a>
                </div>

                <!-- resources -->
                <div>
                    <h3>Resources</h3>
                    <a href="style-guide.html">Style Guide</a>
                    <a href="citations.html">Citations</a>
                </div>
            </footer>

        </div>
    </body> 
</html>