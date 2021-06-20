<?php 
  //connect to db 
  require("database.php");
?>

<!DOCTYPE html> 

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover">

        <title>Explore | Jouream</title>

        <!-- google font link -->
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Nunito:wght@400;700&family=Red+Hat+Text:wght@700&display=swap" rel="stylesheet">
        
        <!-- Linked Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/main.css"> 
        <link rel="stylesheet" type="text/css" href="css/grids.css">
        <link rel="stylesheet" type="text/css" href="css/explore.css">  

    </head>

    <body class="main-body-grid">
        <div class="body-wrapper">
            <header>
                <!-- navigation -->
                <!-- <nav>
                    <a href="index.php">Home</a>
                    <a href="explore.php">Explore</a>
                    <a href="login.php">Login/Sign Up</a>
                </nav> -->
                <?php 
                    include("navigation-check.php"); 
                ?>
            </header>

            <!-- explore header -->
            <section id="header">
                <h1>Explore</h1>
            </section>

            <!-- filters section -->
            <section id="filters">
            </section>

            <!-- create post -->
            <button id="create-post">+</button>

            <!-- create post popup -->
            <div id="popup" class="popup-container">

            <!-- popup content -->
            <div class="popup-content">
                <!-- <span class="close">&times;</span> -->
                <!-- <div class="content"> -->
                <span class="close">&times;</span>
                <h2>New Entry</h2>
                <form>
                    <div>
                        <label for="title">Dream Title</label>
                        <input type="text" id="title" name="title" required>
                    </div>

                    <div>
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date" min="1950-01-01" required>
                    </div>

                    <div>
                        <label for="duration">Duration of Sleep</label>
                        <input type="text" id="hours" name="hours"><p>hrs</p>
                        <input type="text" id="minutes" name="minutes"><p>mins</p>
                    </div>

                    <div>
                        <label for="description">Description</label>
                        <textarea rows="4" cols="50" id="description" name="description"></textarea>
                    </div>
                </form>
                    
                <!-- </div> -->
            </div>

            <section id="posts-container">
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

        <!-- javascript links -->
        <script src="js/create.js"></script>

    </body> 
</html>