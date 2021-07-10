<?php 
  //connect to db 
  require("database.php");
?>

<!DOCTYPE html> 
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover">

        <title>Login | Jouream</title>

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

                    <!-- **IMPORTANT**: CHANGE SIGN UP AFTER AUTHENTICATION IMPLEMENTATION -->
                    <a href="login.php">Login/Sign Up</a>
                </nav>
            </header>

            <h1 id="login">Login</h1>

            <!-- login container -->
            <section id="login-form">
                <div id="login-content">
                    <!-- email -->
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>

                    <!-- password -->
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>


                    <!-- login button and redirection -->
                    <div class="cta-access">
                        <!-- log in button -->
                        <!-- <input type="submit" name="submit" value="Log In"> -->
                        <div class="cta-container">
                            <button class="cta" value="Log In">Log In</button>
                        </div>
    
                        <!-- sign up link -->
                        <p>Already Have an Account? <a href="sign-up.php">Sign Up</a></p>
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
                <a href="style-guide.html">Style Guide</a>
                <a href="citations.html">Citations</a>
            </div>
        </footer>

        <!-- Linked JavaScript Files -->
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/login.js"></script>
    </body> 
</html>