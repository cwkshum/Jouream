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
        
        <!-- linked stylesheets -->
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

       <?php
            require('database.php');

            // default variables 
            $email = "";
            $password = "";

            // Form handling
			if (isset($_POST["submit"])){

                // if email isn't empty, post
                // if empty, say that its required 
                if (!empty($_POST["email"]) && !empty($_POST["password"])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                }

                // checking is user existing in the database or not
                $query = "SELECT * FROM dreamers WHERE email = '$email' and password = '".md5($password)."'";
                $result = mysqli_query($connection, $query) or die(mysql_error());
                $rows = mysqli_num_rows($result);

                if($rows == 1){
                    // Set the session variable using the user's email
                    // session_start();
                    // $_SESSION['email'] = $email;

                    // redirect user to their account page
                    header("Location: account.php");

                } else{
                    // display error message
                    echo "<h1>Oops!</h1>";
                    echo "<h2>Incorrect email/password</h2>";
                }
            }

            // Release the returned data
            mysqli_free_result($result);

            // Close the database connection
            mysqli_close($connection);
        ?>

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