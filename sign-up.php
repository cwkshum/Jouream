<?php 
  // connect to db 
  require("database.php");
?>

<!DOCTYPE html> 

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover">

        <title>Sign Up | Jouream</title>

        <!-- google font link -->
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Nunito:wght@400;700&family=Red+Hat+Text:wght@700&display=swap" rel="stylesheet">
        
        <!-- Linked Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/main.css"> 
        <link rel="stylesheet" type="text/css" href="css/grids.css">
        <link rel="stylesheet" type="text/css" href="css/account-access.css">

    </head>

    <body class="main-body-grid">
        <div class="body-wrapper">
            <header>
                <!-- navigation -->
                <nav>
                    <a href="index.php">Home</a>
                    <a href="explore.php">Explore</a>
                    <a href="login.php">Login/Sign Up</a>
                </nav>
            </header>

            <h1 id="signup">Signup</h1>

            <!-- signup container -->
            <section id="signup-form">
                <div id="signup-content" class="one">
                    <!-- first name -->
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name" required>
                    <p id="first-name-validation"></p>
                    
                    <!-- last name -->
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name" required>
                    <p id="last-name-validation"></p>

                    <!-- email -->
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>
                    <p id="email-validation"></p>
                    <p id="email-taken"></p>
                </div>

                <div id="signup-content" class="two">
                    <!-- password -->
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" onkeyup="passwordCheck()" required>

                    <!-- confirm password -->
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" onkeyup="passwordCheck()" required>
                    <p id='password-message'></p>
                </div>

                <!-- login button and redirection -->
                <div class="cta-access">
                    <!-- sign up button -->
                    <div class="cta-container">
                        <button id="sign-up" class="cta" value="Sign Up" disabled="true">Sign Up</button>
                    </div>

                    <!-- log in link -->
                    <p>Don't Have an Account? <a href="login.php">Log In</a></p>
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
                <a href="style-guide.html">Style Guide</a>
                <a href="citations.html">Citations</a>
            </div>
        </footer>

        <!-- Linked JavaScript Files -->
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/sign-up.js"></script>
    </body> 
</html>