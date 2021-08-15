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

        <title>Entries | Jouream</title>

        <!-- google font link -->
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Nunito:wght@400;700&family=Red+Hat+Text:wght@400;700&display=swap" rel="stylesheet">
        
        <!-- Linked Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/main.css"> 
        <link rel="stylesheet" type="text/css" href="css/grids.css">
        <link rel="stylesheet" type="text/css" href="css/entries.css">

    </head>

    <body class="main-body-grid">
        <div class="body-wrapper">
            <header>
                <!-- navigation -->
                <nav>
                    <a href="index.php">Home</a>
                    <a href="explore.php">Explore</a>
                    <a href="entries.php">Entries</a>
                    <a href="account.php">Account</a>
                    <a href="logout.php">Log Out</a>
                </nav>
            </header>

            <!-- entries header -->
            <section id="header">
                <h1>Entries</h1>

            </section>

            <!-- filters section -->
            <section id="filters">
                <!-- sort by filter -->
                <label for="sort">Sort by:</label>
                <select id="sort" name="sort" onchange="sortFilter()">
                    <option value="recent">Most Recent</option>
                    <option value="oldest">Oldest</option>
                </select>

                <!-- tag filter -->
                <div id="tags">
                    <label for="tag-input">Tags:</label>
                    <input type="text" id="tag-input">  
                </div>

                <!-- search filter -->
                <input type="text" id="search" name="search" onkeyup="searchFilter()">
                
            </section>

            <!-- create post -->
            <!-- <button></button> -->
            
            <!-- entries section -->
            <section id="entries-container">
                <div id="entries"></div>
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
                <a href="style-guide.html">Style Guide</a>
                <a href="citations.html">Citations</a>
            </div>
        </footer>

        <!-- Linked JavaScript Files -->
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/entries.js"></script>
        <script src="js/tags.js"></script>

    </body> 
</html>