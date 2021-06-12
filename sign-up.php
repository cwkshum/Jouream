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

    </head>

    <body>
        <header>
            <!-- navigation -->
            <nav>
                <a href="index.php">Home</a>
                <a href="explore.php">Explore</a>

                <!-- **IMPORTANT**: CHANGE SIGN UP AFTER AUTHENTICATION IMPLEMENTATION -->
                <a href="login.php">Login/Sign Up</a>
            </nav>
        </header>

       <!-- login container -->
       <section>
            <form>
                <!-- first name -->
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" required>
                
                <!-- last name -->
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" required>

                <!-- email -->
                <label for="email">Email</label>
                <input type="text" id="email" required>

                <!-- password -->
                <label for="password">Password</label>
                <input type="password" id="password" required>

                <!-- confirm password -->
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" required>

                <!-- sign up button -->
                <input type="submit" value="Sign Up">

                <!-- log in link -->
                <p>Don't Have an Account? <a href="">Log In</a></p>
            </form>
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