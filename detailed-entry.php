<?php 
  //connect to db 
  require("database.php");

  include("session-not-active-check.php");
?>

<!DOCTYPE html> 

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover">

        <title>[entry name] | Jouream</title>

        <!-- google font link -->
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Nunito:wght@400;700&family=Red+Hat+Text:wght@700&display=swap" rel="stylesheet">
        
        <!-- Linked Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/main.css"> 

    </head>

    <body>
        <header>
           <!-- navigation -->
           <nav>
                <p class="logo">LOGO</p>
                <a href="index.php">Home</a>
                <a href="explore.php">Explore</a>
                <a href="entries.php">Entries</a>
                <a href="account.php">Account</a>
                <a href="logout.php">Log Out</a>
            </nav>
        </header>

        <!-- entry header -->
        <section id="header">
            <a href=""></a>
            <h1>[entry name]</h1>

        </section>
        
        <!-- entry section -->
        <section id="detailed-entry">

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


    </body> 
</html>